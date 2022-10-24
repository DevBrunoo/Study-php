<!-- 
    A funcao print() imprime dados passados a ela
    ---------------------------------------------
 -->

 <?php
    print("<p>Eu amo o verao</p>")
 ?>

 <?php
    $estação = "verão";
    print "<p> Eu amo o $estação.</p>";
?>

<?php
   print "<p>Eu amo o verão</p>"  
?>

<!-- 
    Todas as funcoes produzem o mesmo resultado
    Nao ha muita diferenca entre echo e print 
    porem com echo voce pode imprimir multiplas strings
    Exemplo abaixo
    -------------------------------------------
 -->

 <?php
    $heavyweight = "Lennox Lewis";
    $lightweight = "Floyd Mayweather";
    echo $heavyweight, " e ", $lightweight, "Sao grandes lutadores"

?>

<!-- 
   A funcao encho e mais rapida por nao retorna nada
   porem e bem dificio notar essa diferenca, com isso
   voce pode tomar a decisao com base no estilo
   ---------------------------------------------------
 -->