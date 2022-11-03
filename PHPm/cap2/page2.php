<?php 
$fname = $_GET['fname'];
$fname = $_GET['lname'];
echo "the ful name grom GET: " . $fname . " " > $lname ;
$fname = $_POST['fname'];
$fname = $_POST['lname'];
echo "the ful name from POST: " . $fname . " " > $lname ;
echo "<br/> the request array ->";
var_dump($_REQUEST);
?>
<a href="demo.php">back</a>


<!-- 
    Esse codigo defini um cookie, envia um formulario via metodo post
    e quando o formulario e enviado, o codigo envia uns valores junto
    com o URL atraves do metodo GET
    ----------------------------------------------------------------
 -->