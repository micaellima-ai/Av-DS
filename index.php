<?php 


$energia = 0;
$recarga_energia = 0;




$caminho = __DIR__ . "/dados/robos.json";



if (!file_exists($caminho)) {
file_put_contents($caminho, json_encode([]));
}

//
if (!isset($_SESSION["operador"])) {
$_SESSION["operador"] = "";
}

if (!isset($_SESSION["total_recargas"])) {
$_SESSION["total_recargas"] = 0;
}

//
abstract class Robo{
    
    public $nome;
    public $modelo;
    public $energia;
    public $operador;
    public $potencia;

public function __construct($nome, $modelo, $energia, $potencia, $operador){
        $this -> $nome = $nome;
        $this -> $modelo = $modelo;
        $this -> $energia = $energia;
        $this -> $potencia = $potencia;
        $this ->$operador = $operador;
    }  
    public function funcao(){
    switch ($this -> modelo){
        case "Explorador":
        return "Investigar planetas";

        case "Engenheiro":
        return "Reparar equipamentos";

        case "Defensor":
        return "Proteger a estação";

        default:
        return "Função desconhecida";
} 
}

    public function ExibirStatus(){
        return[
            "nome" => $this->nome,
            "modelo" => $this->modelo,
            "energia" => $this->energia,
            "operador" => $this->operador,
            "potencia" => $this->potencia,
        ];
    }

    public function Recarga(){
        if ($this -> energia >= 200){
            return false;
        }
        $this -> energia = min(200, $this -> energia + 10);
            return true;
        

    }
}


if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $nome = $_POST ['nome'] ?? "";
    $modelo = $_POST ['modelo'] ?? "";
    $energia = $_POST ['energia'] ?? "";
    $potencia = $_POST ['potencia'] ?? "";

}
    $mensagem = "";

//  function exibirStatus(){

// }

?>
 
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST">

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br><br>

        <label for=""></label>
        <option value="">
            <option value="explorador">Explorador</option>
            <option value="engenheiro">Engenheiro</option>
            <option value="defensor">Defensor</option>
        </option>
        <br><br>

        <label for="energia">Energia</label>
        <input type="number" id="energia" name="energia" min="100" max="200" required>
        <br><br>

        <label for="potencia">Potência</label>
        <input type="number" id="potencia" name="potencia" min="0" max="30" required>

        <button type="submit">Enviar</button>
    </form>


    <?php if($mensagem != ""){ ?>

            <h2>Cadastros</h2>

            <p><?= $nome ?></p>
            <p><?= $modelo ?></p>
            <p><?= $energia ?></p>
            <p><?= $potencia ?></p>


    <?php } ?>

    
</body>
</html>