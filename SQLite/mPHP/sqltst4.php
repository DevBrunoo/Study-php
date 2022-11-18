<?php

session_start();

$folder = $_SESSION['folder'];

$filename = $folder. "/question1.txt";

$file_handle = fopen($filename, "a+"); // abra o arquivo para ler, então, limpe-o selecione qualquer texto no arquivo que já possa existir 
$comments = fread($file_handle, filesize($filename)); 
fclose($file_handle); // feche este handle

if ($_POST['posted']) {

// crie o arquivo se for a primeira vez, então // salve o texto que está em $_POST['question1'] 
$question1 = $_POST['question1'];

$file_handle = fopen($filename, "w+");

// abra o arquivo para uma total sobregravação

if (flock ($file_handle, LOCK_EX)){ // faça um bloqueio exclusivo

if (fwrite($file_handle, $question1) == FALSE) { 
    echo "Cannot write to file ($filename)";

} 
flock ($file_handle, LOCK_UN);

// libere o bloqueio

}

// feche o handle de arquivo e redirecione para a próxima página? 
fclose($file_handle); 
header("Location: page2.php" );

} else 
{
?>

<html>

<head> 
    <title>Files & folders On-line Survey</title>

</head> 
<body>

<table border=0>
    <tr><td> Please enter your response to the following survey question:

</td>
</tr> <tr bgcolor=lightblue><td>

what is your opinion on the state of the world economy?<br/>

Can you help us fix it? </td></tr>

<tr><td>

<form action="<?= $PHP_SELF ?>" method=POST>

<br/>

<input type="hidden" name="posted" value=1>

<textarea name="question1" rows=12 cols=35><?= $comments ?></textarea> </td></tr>

<tr><td>
    <input type="submit" name="submit" value="Submit">
</form></td></tr>
</table>
<?php } ?> 

<!-- 
    Observe que ha um parametro definido apontando para a+ 
    se voce acessar php.net/index.php vera um monte dessas letras e seus significados 
    Este faz que o arquivo se abra para leitura e gravacao, se o aquivo nao existir o php
    tentara crialo 

    Usamos w+ para fazer abrir apenas para gravacao apenas, criando o e se existir o
    esvaziando.
 -->