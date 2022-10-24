<?php
 function keep_track() {
     STATIC $count = 0;
     $count++;
     echo $count;
     echo "<br />";
 }
keep_track();
keep_track();
keep_track();
keep_track();
keep_track();
?>


<!-- 
    Essa e uma funcao que podemos dizer que e recursiva
    esse e um poderoso conceito na programacao pois
    ela se chama a si mesmo ate uma condicao ser encontrada
    --------------------------------------------------------
 -->
 