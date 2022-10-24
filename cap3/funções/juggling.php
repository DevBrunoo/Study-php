

<?php

$total = 5; //Um inteiro
$count = "15"; //Uma string
$total += $count; //$total = 20 (um inteiro)

?>

<!-- 
    O $total esta resiguinado como como 20, convertendo
    a variavel $count a partir de uma string 
    Exemplo abaixo mostrando a capacidade de Juggling
    --------------------------------------------------
 -->

 <?php 
 $total = "45 carros de bombeiro";
 $incoming = 10;
 $total = $incoming + $total; // $total = 55
 ?>


<?php 
$item = 43;

printf("A variavel \$item é do tipo array: %d <br />", is_array($item));
/* O contra barra fala para o navegador tratar o $ como caractere normal
-------------------------------------------------------------------------- */
printf("A variavel \$item é do tipo inteiro: %d <br />", is_integer($item));
printf("A variavel \$item é numerica: %d <br />", is_numeric($item));

?>



