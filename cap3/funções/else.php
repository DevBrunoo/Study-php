<!-- 
    Usamos else para dizer 'se nao'
    ou seja, se o usuario nao acerta o numero
    vai aparecer outra mensagem a ele
    ---------------------------------------------
 -->

 <?php 
   $secretNumber = 453;
   if($_POST['guess'] == $secretNumber ) {
       echo "<p>Parabens</p>";
   } else {
       echo "<p>Sinto muito</p>";
   }
 ?>

 