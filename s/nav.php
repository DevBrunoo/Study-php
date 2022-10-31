


<style>
  /* 
Aqui estou inportando uma fonte 
do google fonts
-----------------------------------
*/
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap');


/* 
Com o * estou definindo o estilo 
da pagina em geral, mas nao dos comoponentes
-------------------------------------------
*/

*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

/* 
Agora vou definir o estilo das tags
o que foi indexado com class="name""
esse name aparecera na folha de estilo com 
um ponto atras para dizer que se trata de uma class
----------------------------------------------------
*/

li, a, button {
    font-family: "Montserrat", sans-serif;
    font-weight: 500;
    font-size: 16px;
    color: white;
    text-decoration: none;
}

header {
    display:flex;
    justify-content: space-between;
    align-items: center;
    padding: 30px 10%;
    background-color: black;
}
.h1_nav{
    color:white;
    font-size: 39px;
}
.h1_nav:hover{
    color:rgb(0,136,169,0.9);
}

.logo {
    cursor: pointer;
}
.nav__links {
    list-style-type: none;
}

.nav__links li {
    display: inline-block;
    padding: 0px 20px;
}
.nav__links li a {
    transition: all 0.3s ease 0s;
}

.nav__links li a:hover{
    color:aqua
}

button {
    padding: 9px 25px;
    background-color: rgb(47, 111, 248);
    border: none;
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.3s ease 0s;
}
li{
    font-size: 19px;
}

button:hover{
    background-color: rgb(0,136,169,0.9);
}

</style>

<header>
<a href="./home.php">
    <h1 class="h1_nav">Stratton Oakmont</h1>
    <figcaption>You broker</figcaption>
<a>
            <nav>
            <ul class="nav__links">
                  <li><a href="./calculadora.php"><b>Finance calculator</b></a></li>
                  <li><a href="./sobre_nos.php"><b>About-us</b></a></li>
                  <li><a href="./novidades.php"><b>News</b></a></li>
            </ul>
        </nav>
        <a class="cta" href="./inscreva.php"><button class="button_nav">Contact</button></a>
 </header>