<!-- 
    E sempre bom declarar uma variavel antes de usala
    fica mais pratico e menos pragrematico em sua 
    releitura, esta dentro das boas praticas 
    ----------------------------------------------
 -->
<?php

 $x = 4;
 function assignx() {
     $x = 0;

     printf("\$x dentro da função é %d <br />", $x);
 }

 assignx();
 printf("\$x fora da função é %d <br />", $x);

 ?>
 <!-- 
     Voce pode ver que os valores forma diferentes
     Isso acontece porque a variavel que esta dentro 
     da funcao nao interfere nas variaveis fora da funcao
     que foi declarada.
     Essa secao se aplica somente aos parametros 
     passados por valor e nao aqueles passados por referencia 
     ------------------------------------------------------------
  -->