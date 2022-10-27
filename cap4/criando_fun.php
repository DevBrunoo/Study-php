<!-- 
    Mesmo com muitas funcoes voce pode 
    precisar criar funcoes em raras ocasioes 
    Nesse arquivo mostrarei um pouco
    ------------------------------------------
 -->

 <!-- 
     A sintaxe do modelo pre definido fica assim
    
     function functionName(parameters)
     {
         function-body
     }
     
     Exemplo mais implementavel:
     ----------------------------------------------
  -->

<?php 

function generateFooter()
{
    echo "Copyright 2007 W. Jason Gilmore";
}

/* 
Uma vez ja pre definida voce pode chamar
essa funcao da seguinte maneira, chamado o nome dela

generateFooter();
*/
?>
<p>Abaixo esta o rodape</p>

<?php
generateFooter();
?>