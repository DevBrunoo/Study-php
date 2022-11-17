<!-- 
    A expressao if e uma das construcoes mais importantes 
    oferecendo um meio conviniente para execucao de codigo condicional

    A sintaxe e 
    if(expressiom){
        statement
    }

    A funcao abaixo da parabens a quem 
    advinha um numero secreto definido na 
    variavel $secretNumber
 -->

<?php
  $secretNumber = 443;
  if ($_POST[`guess`] == $secretNumer){
      echo "<p>Parabens</p>";
  }

?>
 <!-- 
     Sintaxe delimitada e uma alternativa disponivel para if, while, for,
     foreah e estruturas de controle switch. Isto envolve a chave de abertura
     (:) e substituido a chave de fechamento por edif;, endwhile, etc..
     -------------------------------------------------------------------------
  -->
<?php 
 $secretNumber = 453;
 if ($_POST['guess'] == $secretNumber) echo "<p>Parabens</p>";
?>


