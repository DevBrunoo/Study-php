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
   $secretNumber = 453;
   $_POST['guess'] = 442;
   if($_POST["guess"] == $secretNumber) {
       echo "<p>Parabens!</p>";
   } elseif (abs ($_POST['guess'] - $secretNumber) < 10){
       echo "<p>Voce esta chegando perto</p>";
   } else {
       echo "<p>Sinto muito</p>";
   }
 ?>