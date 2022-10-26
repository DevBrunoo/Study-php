<!-- 
    Foreach e sintaxe de contrucao de 
    loops focados em arrays, dois exemplos 
    dessa sintaxe sao

    foreach (array_expr as $value){
        staterment
    }
    --------------------------------
    Exemplo com arrays de links:
 -->

 <?php 
 $links = array("www.apress.com", "www.php.net", "www.apache.org");
 echo "<br>Recursos</b>:<br />";
 foreach($links as $link) {
     echo "<a href=\"https://$link\">$link</a><br />";
 }
?>
 /* 
 Segundo exemplo colocando 
 links juntos com seus titulos
 -----------------------------
 */

 <?php

 $links = array("The apache Web server" => "www.apache.org",
                   "Apress" => "www.apress.org",
                   "The PHP Scripting Language" => "www.php.net");

                   echo "<b>Recursos Online</b>: <br />";
                   foreach($links as $title => $link) {
                       echo "<a href=\"https://$link\">$title</a><br />";
                   }
 

 ?>