<?php 
session_start();
if ($_POST['posted'] && $_POST['email'] != "") {
$folder = "surveys/" .strtolower($_POST['email']);

// envie as informacoes do caminho para sessao 
$_SESSION['folder'] = $folder; 

if (!file_exists($folder)){
    // crie o diretorio, entao adicione os arquivos vazios
    mkdir($folder);
}

header( "Location: page1.php");
} else {} ?>

<html>
    <head>
        <title>File & folders  - on-line survey </title>
    </head>
    <body bgcolor="#FFFFFF" text="#000000">
        <h2>Survey form</h2>
        <p>Please enter you email addres to start recording you comments</p>
        <form action="<=? $PHP_SELF ?" method="POST">
        <input type="hidden" name="posted" value=1>
        <p>e-mail addres: <input type="text" name="email" size="45"> 
        <br/><br/>
        <input type="submit" name="submit" value="Submit">
</form> 
<?php ?>
</body>
</html>