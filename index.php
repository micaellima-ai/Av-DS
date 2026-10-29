<?php 


$energia = 0;
$recarga_energia = 0;




$caminho = __DIR__ . "/dados/robos.json";


// $json = (!) ;

abstract class Robo{
    
    public $nome;
    public $modelo;
    public $energia;
    public $potencia;

public function __construct($nome, $modelo, $energia, $potencia){
        $this -> $nome;
        $this -> $modelo;
        $this -> $energia;
        $this -> $potencia;
}
}

class funcao{
    public function Explorador(){
        $this =  $modelo;
        return "Investigar planetas";

    }

    public function Engenheiro(){
        $this =  $modelo;
        return "Reparar equipamentos";

    }

    public function Defensor(){
        $this =  $modelo;
        return "Proteger a estação";
    }

}
class Status{
    public function ExibirStatus(){
        return;
    }

    public function Recarga(){

        $mensagem = "Você esta recuperando Energia";
    }
class Energia{
    public function EnergiaInicial(){
        return "ola";
    }
}

class Secoes{
    public function session_start(){
    
}
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


    <?php ?>

    
</body>
</html>