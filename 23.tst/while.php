<?php

//Primeiro laco de repeticao
$x = 0;

while ($x <= 100){
    echo "O numero e: $x <br>";
    $x+=10;
}


//Segundo laco DOWILE
do {
    echo "O numero e: $x <br>";
    $x++;
} while ($x <= 5);


//FOR e uma estrtura de repeticao quando voce ja sabe qunatas vezes que ver aquilo se repetindo
//FOREACH vai repetir o codigo o tanto de vezes que estiver pedindo

$cores =["azil", "amarelo", "verde", "vermelho"];

foreach ($cores as $valor){
    echo "A cor e $valor <br";
}

?>

