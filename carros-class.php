<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Document</title>
</head>
<body id="fu">
<div class="item-2">
    <p style="background-color: red;font-size: 60px; text-align: center;">Carros</p>
</div>
    <div id="menu">
        <lu>
            <li><a href="index.php">Home</a></li>
        </lu>
    </div>

</br></br></br></br>
<div class="item-3">

    <?php
class tipo {
    public $Carro; 
    public $Moto; 
    public $Motorhome; 
    public $Caminhao; 
    public $Bicicleta; 
    

    public function escolher(){
        echo "<h2>Você entrou no site!</h2>";
    }
}

$carro = new tipo();
$carro -> escolher();
$carro -> Carro = "<h3>Carro:</h3>Chevrolet Impala Sedan 1967</br>";
$carro -> Moto = "</br><h3>Moto:</h3>Honda CB750";
$carro -> Motorhome = "</br><h3>Motorhome:</h3>Swift Escape 684 4 Motorhome";
$carro -> Caminhao = "</br><h3>Caminhão:</h3>Mercedes benz MB1620 07/07";
$carro -> Bicicleta = "</br><h3>Bicicleta:</h3>low rider aro 72";
?>
</div>
<section class="container flex flex-wrap">
    
<?php

echo "<h3>$carro->Carro</h3>";
echo "<h3>$carro->Moto</h3>";
echo "<h3>$carro->Motorhome</h3>";
echo "<h3>$carro->Caminhao</h3>";
echo "<h3>$carro->Bicicleta</h3>";

?>
</section>
</body>
</html>

