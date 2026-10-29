<?php 
// http://abre.ai/prova01-ds-



$energia = 0;
$recarga_energia = 0;




$caminho = __DIR__ . "/dados/robos.json";


// $json = ;

abstract class Robo{

    public function Explorador(){
        return "Investigar planetas";

    }

    public function Engenheiro(){
        return "Reparar equipamentos";

    }

    public function Defensor(){
        return "Proteger a estação";
    }

}
abstract class Energia{
    public function EnergiaInicial(){
        
    }
}





abstract class Status{
    public function ExibirStatus(){
        return;
    }

    public function Recarga(){

        $mensagem = "Você esta recuperando Energia";
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
        <label for=""></label>
        

        <label for=""></label>
        <option value=""></option>

        <label for=""></label>


        <label for=""></label>




    </form>

    
</body>
</html>