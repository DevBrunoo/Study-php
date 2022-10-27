<!-- 
    Usamos else para dizer 'se nao'
    ou seja, se o usuario nao acerta o numero
    vai aparecer outra mensagem a ele
    ---------------------------------------------
 -->
<!-- 
    Veja que na variavel sorte eu adicionei get
    o porque disso e que consigo mudar o valor da 
    variavel aparti do layout.
    ----------------------------------------
 -->

<?php 
   $sorte=$_GET["numero"];
   $secretNumber = 4;

   echo "Tente a sorte: $sorte";

   if($sorte == $secretNumber ) {
       echo "<p>Parabens</p>";
   } else {
       echo "<p>Sinto muito</p>";
   }

   include('post.php')
 ?>


<form name="f_cad" method="get">

<input type="number" name="numero" size="40" maxlength="40"/><br/>
<br>
<input type="submit" value="Enviar"/>
<input type="reset" value="Limpar"/>

</form>


<!-- 
    A diferenca de Get e Post
    e que o post pode ser mais lento 
    porem os dados sao rodados internamente 
    ou seja. com isso nao vai ficar aparecendo 
    na sua url como acontece com Get

    Get e passado via URL ja POST via HTTP
    e mais racionar usar get para coisas pequenas 
    e usar POST para coisas mais seguras. 
    ----------------------------------------
 -->

 <form name="" method="post" action="post.php">
 <input type="number" name="laranjas" size="40" maxlength="40"/><br/>
     <br>
     <input type="submit" value="Enviar"/>
     <input type="reset" value="Limpar"/>
 </form>