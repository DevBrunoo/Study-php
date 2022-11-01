
<!-- 
    100 sera implementado no 
    especificador %d, que apresenta um 
    numero inteiro decimal
    -----------------------------------
 -->
<?php 
  printf(' %d anos Antonio tem ', 100);
?>
 
 <!-- 
     Pelo fato de 3,43 nao ser um 
     numero inteiro o especificador 
     %d nao consiguira colocar todo numero
     --------------------------------------
  -->

<?php
  printf(' %d Antonio tem reais ', 3.43);
?>
    <!-- 
        Veja que nesse exemplo o 
        %d foi substiuido por %f 
        que interpreta numeros flutuantes
        Com isso o numero sai certo 
        extamente como esta no codigo
        ------------------------------------
     -->
<?php
  printf(' %f Maria tem reais ', 3.43);
?>

<br>
<br>
<!-- 
    Agora foi declarado um especificador 
    %d para uma string o que da errado
    e aparece um numero no lugar da string
    --------------------------------------
 -->
<?php
  printf(' %d Maria tem reais ', 'luara');
?>

<!-- 
    Substituindo o esecificador 
    %d pelo %s a estringue da certo
    e o nome aparece
    -----------------------------------
 -->
<br>
<br>
<?php
  printf(' %s te amo  ', 'luara');
?>

