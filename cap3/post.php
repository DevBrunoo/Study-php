<?php
 $quantidade = $_POST["laranjas"];
 $limite = 22;
 if ( $quantidade == $limite )
 {
     echo "<p>Compra mais sr Ze</p>"; 
 } else {
     echo "<p>Seu sangue vai amarela</p>";
 };

echo "Voce tem $quantidade laranjas, $quatidade";

?>