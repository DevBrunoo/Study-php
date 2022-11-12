<?php 

    /* 
    Voce pode ver que chamei as variaveis
    outout duas vezes, porem retorno apenas 
    uma vez, a linha 1 pois ela foi escrita primeiro
    isso acontece porque o php usa a mesma regras 
    integradas em python, que se assemelha em
    ler e executar o codigo de cima para baixo.
    Por esses motivos e outros e importante declarar 
    antes de usar.
    ------------------------------------------------------- */ 
    
    
    $output = " Esta é uma linha 1. \nE esta é uma outra linha<br> ";
    echo $output;
    $output = " Esta é uma linha 2. \nE esta é uma outra linha<br> ";

    /* 
    Voce pode ver no printf abaixo
    que somente a variavel com aspas duplas 
    foi definida no layout do navgador
    ------------------------------------------
    */

    /* 
    Estou jogando uma imagem dentro de uma 
    variavel, com  estilo ja incluido
    com isso consigo usar a mesma imagen diversas vezes
    sem precisar redigitar todo o codigo novamente
    -------------------------------------------------- */
    $imgburro = '<img style="width:170px;" src="https://images.pexels.com/photos/208821/pexels-photo-208821.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="burro">    ';
    
    /* 
    Depois de declarar duas variaveis
    voce pode ver em seu navegador que apenas uma
    sera mostrada, isso acontece pelo mal uso de aspas
    a que tem aspas duplas sera mostrada, porem a com 
    aspas simples nao
    --------------------------------------------------------
    */

    echo '$imgburro', "$output";
    print "$imgburro";

    
    $nav = '<style>
    h1 {
        color:blueviolet;
        font-size: 80px;
    }
    
    .bolas{
        color:burlywood;
    }
    #controle{
        color:yellowgreen;
        font-size: 40px;
    }
</style>
<div>
    <nav>
        <h1>Lunar Burro</h1>
    </nav>
    <ul>
        <li class="bolas">bolas</li>
        <li id="controle">controle</li>
        <li>Ooas</li>
    </ul>
</div>';

$var = 'variavel';
global $navbar;

$navbar='

<style>
    /* Add a black background color to the top navigation */
.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
</style>
<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>
';

 /* 
  Repare a diferenca das tres funcoes de saida
  print pode ser usado, da mesma maneira que echo
  porem nao e recomendado, pois pode perde em requesitos de velocidade

  Echo com aspas dublas mais as duas tags de br 
  serve para colocar um layout no arquivo desde 
  a criacao da funcao de saida. A como usar os dois como mostrado antes 
 --------------------------------------------------------------------------
  */

print "$nav";
echo "$navbar";
echo "<br><br>";

/* 
Como mostrado antes, abaixo 
estou usando a funcao de saida
juntado tags puras com variaveis
-----------------------------------------
 */

echo "<p>Aqui estou usado os dois</p> $imgburro"


?>
<!-- 
    Aspas duplas sao as mais usadas no PHP
    porque elas oferecem mais flexbilidade
    Isso acontece porque a sequencia de variaveis escopo
    sao interpretadas de maneira certa 
    -----------------------------------------------
 -->

 <!-- 
    Com sequencia de escpape
    /n quebra de linha
    -------------------------
 -->
<?php
   
   $sport = "boxe";
   printf ("$navbar");
   echo "<br> $navbar O esporte favorito de John \n\ne $sport";

?>



<br> <!-- Br e usado para dar espacao "pular uma linha no layout" -->
<br> 
<hr> <!-- Hr e usado para separar secoes com uma grande linha -->

<!-- 
    Aqui estou colocando 
    meu navbar, aparti de uma variavel 
    que declarei anteriormente em meu php
    -----------------------------------------
 -->
 <!-- 
     Declaracao da variavel: navbar
     ---------------------------------
  -->
<?=$navbar;?>
<br>

<!-- 
    Aqui esta declarado o codigo em php 
    descrito antes, em minha variavel
    ------------------------------------
 -->
<br>
<br>
<hr>
<?=$navbar;?>
<br>
<br>

<?=$nav;?>


<br>
<br>


<img style="width:170px;" src="https://images.pexels.com/photos/208821/pexels-photo-208821.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="burro">
<style>
    h1 {
        color:blueviolet;
        font-size: 80px;
    }
    .bolas{
        color:burlywood;
    }
    #controle{
        color:yellowgreen;
        font-size: 40px;
    }
</style>
<div>
    <nav>
        <h1>Lunar Burro</h1>
    </nav>
    <ul>
        <li class="bolas">bolas</li>
        <li id="controle">controle</li>
        <li>Ooas</li>
    </ul>
</div>

<!-- 

    Sequencias de escape reconhecidas 
   
    Veja na tab 75
-->
<hr>
<br> 

<p>
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla animi beatae ipsa consequatur laborum dicta similique deleniti! Esse pariatur iusto est quaerat maiores, dolor aliquid possimus eum quod iure dolorem.
Quaerat impedit, itaque magni maxime repellendus iusto consequuntur dignissimos repudiandae natus harum repellat quos aut rerum! Cupiditate fugiat incidunt amet dolores, natus magnam eligendi sunt, placeat autem rerum temporibus doloremque.
Hic porro soluta perspiciatis voluptas doloremque sunt repellat, natus corporis similique quia. Voluptatum perspiciatis praesentium eos aliquam iusto, vel expedita officia! Dolore quas et alias adipisci quo asperiores porro ullam?
Explicabo vero consequatur facilis temporibus aliquid minus repellendus voluptate quisquam distinctio officia hic, pariatur sapiente fuga iste quam a recusandae placeat, eaque in totam cum debitis. Possimus ipsam debitis dolore!</p>
<div>
    <?=$imgburro;?>
</div>
<div>
    <?=$imgburro;?>
</div>
<div>
    <?=$imgburro;?>
</div>
<br>
<br>
<hr>
<!-- 
    Aqui estou usando o mesmo codigo
    declarado na variavel $navbar
    ------------------------------
 -->
<style>
.topnav {
  background-color: #333;
  overflow: hidden;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
</style>
<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>


<!-- 
    Como voce pode ver tem como adicionar
    diversas images usando variaveis
    pode adicionar com imagens 
    ---------------------------------------
 -->