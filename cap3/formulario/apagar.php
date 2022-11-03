<?php 

$nome = $_GET['nome'];
$email = $_GET['email'];

if($nome > 1) {
    echo "Seu nome e $nome \n seu email e: $email";
} else {
    echo "Digite algo nos campos";
}

?>

<fieldset>
    <form method="get">
    <legend>Formulario</legend>
    <br>
    <input type="text" name="nome" id="nome">
    <br>
    <input type="text" name="email" id="email">
    <br>
    <input type="submit" method="get">
    </form>
</fieldset>