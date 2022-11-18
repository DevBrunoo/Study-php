<?php

session_start();

$folder = $SESSION['folder']; 
$filename = $folder. "/question2.txt";

$file_handle = fopen($filename, "a+");

// abra o arquivo para ler, então, limpe-o 
// selecione qualquer texto no arquivo que já possa existir 
$comments = fread($file_handle, filesize($filename)); 
fclose($file_handle); // feche este handle

if ($_POST['posted']) {

// crie o arquivo se for a primeira vez, então salve 
// o texto que está em $_POST['question1']

$question2 = $_POST['question2'];

$file_handle = fopen($filename, "w+"); 
// abra o arquivo para uma total sobregravação

if (flock ($file_handle, 'LOCKEX')){ // faça um bloqueio exclusivo 
    if (fwrite($file_handle, $question1) == FALSE) 
    { echo "Cannot write to file ($filename)"; }

flock ($file_handle, LOCK_UN); // libere o bloqueio

}

// feche o handle de arquivo e redirecione para a próxima página ? 
fclose($file_handle);

header("Location: last_page.php");

} else {
    ?>

<html> <head>

<title>Files & folders - On-line Survey</title> </head>

<body>

<table border=0><tr><td>

Please enter your comments to the following survey statement:</td></tr> <tr bgcolor=lightblue><td> It's a funny thing freedom, I mean how can any of us <br/>

be really free when we still have personal possessions. How do you respond to the previous statement?

</td></tr> <tr><td>

<form action="<?= $PHP_SELF ?>" method=POST> <input type="hidden" name="posted" value=1>

<br/>

<textarea name="question2" rows=12 cols=35><?= $comments ?></textarea> </td></tr>

<tr><td> <input type="submit" name="submit" value="Submit"> </form></td></tr> </table>

<?php } ?>

<!-- 
    Ao tratamento do arquivo ha muitas opcoes que voce pode
    ver no site Web PHP 

    Quando chegar um cliente que nao deseja pagar muito por um banco de
    dados a uma alternativa que voce pode oferecer a ele, o meio de arquivo 
    como visto antes
    ------------------------------------------------------------------------
 -->