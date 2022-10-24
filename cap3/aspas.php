<!-- 
    Aspas suplas sao as mais usadas no PHP
    porque elas oferecem mais flexbilidade
    Isso acontece porque a sequencia de variaveis escopo
    sao interpretadas de maneira certa 
    -----------------------------------------------
 -->

 <?php
   
   $sport = "boxe";
   echo "O esporte favorito de John e $sport";

?>

<!-- 
    Com sequencia de escpape
    /n quebra de linha
    -------------------------
 -->

<?php 
    
    $output = "Esta é uma linha. \nE esta é uma outra linha";
    echo $output;
?>

<!-- 
    Sequencias de escape reconhecidas 
   
    Veja na tab 75
-->