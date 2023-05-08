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
    <p style="background-color: red;font-size: 60px; text-align: center;">Login</p>
</div>
    <div id="menu">
        <lu>
            <li><a href="index.php">Home</a></li>
        </lu>
    </div>

</br></br></br></br>

<div class="item-3">

    <?php
class clientes {
    public $nome;
    public $idade;
    public $genero;
    public $renda;
    public $telefone;
    public $cpf;
    public $endereco;
    public $email;
    public $orcamento;
    public $enfermidade;

    public function entrar(){
        echo "<h2>Você esta cadastrado no nosso site!</h2>";
    }
}

$cliente = new clientes();
$cliente -> entrar();
$cliente -> nome = "<h3>Nome:</h3>isabela</br>";
$cliente -> idade = "</br><h3>Idade:</h3>20";
$cliente -> genero = "</br><h3>Genero:</h3>feminino";
$cliente -> renda = "</br><h3>Renda:</h3>2 salarios minimos";
$cliente -> telefone = "</br><h3>Telefone:</h3>+00 00000-0000";
$cliente -> cpf = "</br><h3>CPF:</h3>000.000.000-00";
$cliente -> endereço = "</br><h3>Endereço:</h3> R. dos bobos, 000, B. esmero";
$cliente -> email = "</br><h3>Email:</h3>IsabelaCerrado@Gmail.com.br";
$cliente -> orcamento = "</br><h3>Orçamento:</h3>R$300.000,00";
$cliente -> enfermidade = "</br><h3>Enfermidade:</h3>Não possui";
?>
</div>

<section class="container flex flex-wrap">
    
<?php
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


?>
</section>
</body>
</html>

