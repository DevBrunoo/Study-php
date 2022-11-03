


<!-- 
    Sintaxe simples wile
    ---------------------
 -->
 
 <?php 
   $reapet=1;
   while($repeat<=25){
       echo "the counter is:". $repeat; "<br/>";
       $repeat++;
   }
 ?>

 <!-- 
     Sintaxe do while 
     -------------------
  -->

  <?php 
   $reapet=0;
   do {
       $reapet ++;
       echo "the counter is:". $repeat; "<br/>";
   } while ($repeat <= 25);
 ?>

 <!-- 
     A funcao do while executara a funcao ao menos uma vez
     entao validara o teste, para ver se deve ser repetida ou nao 

  -->


  <!-- 
      Loop em For

      Veja que para construcao do loop o contador e contruido
      diretamente na linha condicinal, por tanto o codigo toma
      a decisao e um pouco mais concisa

      Com esse codigo reduzimos o codigo de 5 linhas para duas 
      e uma reducao de 50% do codigo!

      Usar o nome de variavel $i inves de $repeat e mais comun;
      ----------------------_------------------------------------------
   -->


   <?php 
   for ($i=0;$i<=25;$i++){
       echo "the counter is: ". $i. "<br/>";
   }
 ?>