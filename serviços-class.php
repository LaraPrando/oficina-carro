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
    <p style="background-color: red;font-size: 60px; text-align: center;">Nossos seviços</p>
</div>
    <div id="menu">
        <lu>
            <li><a href="index.php">Home</a></li>
        </lu>
    </div>

</br></br></br></br>
<div class="item-3">
    
    <?php
class serviços {
    public $servico; 
    public $tempo; 
    public $valor; 
    public $material; 
    public $motivo; 
    
    public function fazer(){
        echo "<h2>Você entrou no site!</h2>";
    }
}

$trabalho = new serviços();
$trabalho -> fazer();
$trabalho -> servico = "<h3>Serviço pedido:</h3>trocar a capa do banco</br>";
$trabalho -> tempo = "</br><h3>Tempo estimado:</h3>5hrs";
$trabalho -> valor = "</br><h3>Valor pelo serviço:</h3>R$1.200,00";
$trabalho -> material = "</br><h3>Material usado:</h3>Capa para banco da marca chevrolet, impala sedan 1967, couro vemelho/ branco, conjunto completo.</br></br>";
$trabalho -> motivo = "</br><h3>Motivo do pedido:</h3>Capa do banco rasgada.";
$trabalho -> orçamentoC = "</br><h3>Orçamento do cliente:</h3>R$1.500,00</br>";

?>
</div>
<section class="container flex flex-wrap">
<?php

echo "<h3>$trabalho->servico</h3>";
echo "<h3>$trabalho->tempo</h3>";
echo "<h3>$trabalho->valor</h3>";
echo "<h3>$trabalho->material</h3;";
echo "<h3>$trabalho->motivo</h3>";
echo "<h3>$trabalho->orçamentoC</h3>";

$orçamento = 1500;

    $carro1 = "carro";
    $Preçoconserto = 1200;
    $CarroTotal = ($Preçoconserto-$orçamento);
    $Total = (1200);
    echo "<h3>Saldo restante:</h3> R$", $Valortotal = ($CarroTotal), " Reais.";

?>

</section>


</body>
</html>

