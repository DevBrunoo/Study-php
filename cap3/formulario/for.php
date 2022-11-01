<!-- 
    A expressao for oferece mecanismo de loop
    mais complexo que do while, exemplo da sintaxe:

    for (expression1; expression2; expression3){
        statements
    }

    Ha regras que devem ser debatidas, mas recomendo voce ver na pagina 81
    ou pesquisar mais afundo na net:
    ----------------------------------------------
 -->

 <!-- 
     Exemplos com for, sendo que
     todos os quadros representam um 
     quadro parcial de equivalencia quilometro/milha
     --------------------------------------------------
  -->

<?php 
#for ($kilometers = 1; $kilometers <=5; $killometers++){
    printf("%d quilometro = %f milhas <br />", $kilometers,
    $kilometers*0.62140);
#}

?>

<?php 
for ($car = 1; $car <=3; $car++) {
   printf("%d quantidade <br/>",$car);
}
?>

<?php 
for($ovos = 1,50; $ovos <= 9; $ovos++) {
    printf("%s da para comprar <br/>", $ovos);
}

?>

<br>

<?php 
  $ovo = 1;

  while ($ovo <= 10):
    echo "Total de quantidades pode comprar $ovo <br>";
    $ovo++;
  endwhile
?>
