<!-- 
    Exemplo de variavel referida
    para atribuir uma variavel a referenca 
    voce deve usar & antes de $, ficando &$var
    ---------------------------------------------
 -->

 <?php
 $firstname = "Peter"; //Atribuida pelo valor
 $finame = &$firstname; // $firstaname e atribuido por $finame pela referencia  
echo $fname. "</br/>"; //Peter é exibido
$fname = "Dawn"; //mude o valor referido
echo $firstname . "<br/>"; //por causa de "pela referencia"
 ?>

 <!-- 
     O seguinte exemplo de condigo cria duas constantes 
     e tenta recriar uma delas
     ---------------------------------------------------
  -->

<!--   
  define("SYS_OWNER", "PETER");
  define("SYS_MGR", "Simon", "true");
  echo "System owner is:" . SYS_OWNER . "<br />";
  define("SYS_OWNER", "Michael");
  echo "System owner is:" . SYS_OWNER . "<br />";
  echo "System menager is:" . SYS_MGR . "<br />";
  echo "System menage is:" . SYS_mgr . "<br />";

   -->