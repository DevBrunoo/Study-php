<!-- 
    A combinacao if-else funciona bem
    em uma situacao "ou-ou", isto e uma 
    situacao na qual somente dois resultado 
    sao possiveis.de

    No exemplo abaixo estamos revisando 
    a funcao de aniversario, porem com mais
    uma mensagem enplementada, dizendo voce esta perto
    ---------------------------------------------------
 -->

 <?php
   $sorte=$_POST["sort"];
   $secretNumber = 453;
   if($sorte == $secretNumber) {
       echo "<p>Parabens!</p>";
   } elseif (abs ($sorte - $secretNumber) < 10){
       echo "<p>Voce esta chegando perto</p>";
   } else {
       echo "<p>Sinto muito</p>";
   }
 ?>

<form name="elseif" method="post">
<input type="number" name="sort" size="40" maxlength="40"/><br/>
<br>
<input type="submit" value="Enviar"/>

</form>