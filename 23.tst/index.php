<!--
    <?php
 phpinfo()
?>
    
    <?php
$cidade = "sertaozinho";
echo "phpinfo()"
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    echo "<h1>Ola mundo</h1><p>que legal $cidade</p>"
     ?>
</body>
</html>

 -->

<?php 

//str_replace
$palavra = "ola mundo";
echo str_replace("mundo", "Dimitri", $palavra );

$carro = "Eu tenho um gol";
echo str_replace("gol", "ferrari", $carro );
//Essa str_replace substitui as palavras das variaveis
?>