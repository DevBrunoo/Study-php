<!-- 
    A expressao whille especifica
    uma condicao que deve ser prenchida antes 
    antes da execucao do codigo enbutido ser finalizado

    Sintaxe
    while (expression) {
        statements
    }

    No proxim exemplo $count e iniciado no valor 1, com isso
    o valor de $count e elevado ao quadrado e exibido. 
    A variavel $count e entao incrementada por 1 e o loop e repetido 
    ate o valor de $count atingir 5.
    -----------------------------------------------------------------
 -->

 <?php 
   $count = 1; 
   while ($count < 5) {
       printf("%d squared = %d <br />", $count, pow($count, 2));
       $count++;
   }
 ?>


<br>
<br>

<!-- 
    Expressoes condicionais tambem podem ser 
    enbutidas em expressoes while.
    Ex: O sequinte bloco while avalia ate ele
    atigir o fim do arquivo ou ate 5 linhas forem lidas
    -----------------------------------------------------
 -->

 <?php 
$linecount = 1;
$fh = fopen("sports.txt", "r");
while (!feof($fh) && $linecount<=5);{
$line = fgets($fh, 4096);
echo $line. "<br />";
$linecount ++;
}

 ?>

 <!-- 
     A expressao do while de looping e uma variante de while
     porem ela verifica o loop condicional na conclusao do bloco
     ao inves de ser no inicio.
     Segue um exemplo

     do {
      statements
     } while (expression);

     Anbas as expressoes do..while e while sao semelhantes
     a unica diferenca e que o codigo enbutido dentro 
     dentro de uma expressao while nunca poderia ser executado
     porem com do while sim, segue o exemplo
     ---------------------------------------------
  -->


  <?php
     $count = 11;
     do {
         printf("%d squared = %d <br />", $count, pow($count, 2));
     } while ($count < 10)
  ?>
  
  <!-- 
      O resultado é

      11 squared = 121
   -->