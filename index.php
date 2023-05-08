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


<div id="menu">
        <ul>
            <li><a href="serviços-class.php">Serviço</a></li>
            <li><a href="carros-class.php">Carros</a></li>
            <li><a href="clientes-class.php">login</a></li>
            <li><a href="produtos-class.php">produtos</a></li>
</ul>
    </div>

    <p style="background-color: red; color:white; font-size: 60px; text-align: center;">Carol's workshop </p>

    

</br></br></br></br>

<section class="container">
       <div class="item-1"><img src="imagens/banner impala.png" height="400px" weight="10px"></div>
    </section>


    <?php



include ("clientes-class.php");
include ("carros-class.php");
include ("produtos-class.php");
include ("serviços-class.php");

$cliente = new clientes();

echo "<h3>$cliente->nome</h3>";
echo "<h3>$cliente->idade</h3>";
echo "<h3>$cliente->genero</h3>";
echo "<h3>$cliente->renda</h3>";
echo "<h3>$cliente->telefone</h3>";
echo "<h3>$cliente->cpf</h3>";
echo "<h3>$cliente->endereco</h3>";
echo "<h3>$cliente->email</h3>";
echo "<h3>$cliente->orcamento</h3>";
echo "<h3>$cliente->enfermidade</h3>";


$carro = new tipo();

echo "<h3>$carro->Carro</h3>";
echo "<h3>$carro->Moto</h3>";
echo "<h3>$carro->Motorhome</h3>";
echo "<h3>$carro->Caminhao</h3>";
echo "<h3>$carro->Bicicleta</h3>";

$banco = new peças();

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

$trabalho = new serviços();

echo "<h3>$trabalho->servico</h3>";
echo "<h3>$trabalho->tempo</h3>";
echo "<h3>$trabalho->valor</h3>";
echo "<h3>$trabalho->material</h3;";
echo "<h3>$trabalho->motivo</h3>";



    ?>
</body>
</html>