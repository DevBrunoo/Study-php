<!-- 
    Exemplo de cockie

    O primeiro comando setcookies chamado "cookieName" na maquina do
    cliente fornece o conteudo da variavel $data, como nao ha nenhuma 
    expiracao definida o cookie deixa de existir quando secao Web termina

    -----------------------------------------------------------------------
 -->

 <?php 
$data = "this will be placed in the cookie";
setcookie("cookieName", $data);
setcookie("AnotherCookieName", $data, time()+60*60*24*30);
 ?>

<!-- 
    O codigo acima apenas define o valor do cookie 
    na maquina do cliente.
    -------------------------------------------------
 -->

 <!-- 
     O codigo para recuperar o cookie AnotherCookieName
     que definimos acima.
     --------------------------------------------------
  -->
  <?php 
  $newData = $_COOKIE["AnotherCookieName"];

  ?>

  