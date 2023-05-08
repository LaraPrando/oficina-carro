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
    <p style="background-color: red;font-size: 60px; text-align: center;">Conheça nossos produtos!</p>
</div>
    <div id="menu">
        <lu>
            <li><a href="index.php">Home</a></li>
        </lu>
    </div>

</br></br></br></br>

<div class="item-3">

    <?php
class peças {
    public $preco; 
    public $marca; 
    public $cor; 
    public $peca; 
    public $garantia; 
    public $descricao; 
    public $quantidade; 
    public $parcela; 
    public $modelo; 
    public $material; 

    public function reposicao(){
        echo "<h2>Sua compra foi efetuada com sucesso!</h2>";
    }

}

$banco = new peças();
$banco -> reposicao();
$banco -> preco = "<h3>Preço:</h3>R$1.900,00</br>";
$banco -> marca = "</br><h3>Marca:</h3>Chevrolet";
$banco -> cor = "</br><h3>Cor:</h3>vermelho/branco";
$banco -> peca = "</br><h3>Peça:</h3>capa para banco";
$banco -> garantia = "</br><h3>Garantia:</h3>1 ano";
$banco -> descricao = "</br><h3>Descrição:</h3>Capa para banco da marca chevrolet, impala sedan 1967, couro vemelho/ branco, conjunto completo.";
$banco -> quantidade = "</br><h3>Quantidade:</h3>2 unidades";
$banco -> parcela = "</br><h3>Parcela:</h3>ate 12x sem juros no cartão";
$banco -> modelo = "</br><h3>Modelo:</h3>Chevrolet Impala Sedan 1967";
$banco -> material = "</br><h3>Material:</h3>Couro Vermelho/Branco";

?>
</div>
<section class="container flex flex-wrap">
    
<?php

echo "<h3>$banco->preco</h3>";
echo "<h3>$banco->marca</h3>";
echo "<h3>$banco->cor</h3>";
echo "<h3>$banco->peca</h3>";
echo "<h3>$banco->garantia</h3>";
echo "<h3>$banco->descricao</h3>";
echo "<h3>$banco->quantidade</h3>";
echo "<h3>$banco->parcela</h3>";
echo "<h3>$banco->modelo</h3>";
echo "<h3>$banco->material</h3>";

?>
</section>
</body>
</html>

