<?php 
$sql = 
'INSERT INTO guest (fname, lname, comments '.
'VALUES("Peter", "Maclntyre", "Nice work pilgrim!);'.

'INSERT INTO guest (fname, lname, comments) '.
'VALUES("Dawn", "Maclntyre", "Geat site, love what you have!");'.

'INSERT INTO guest (fname, lname, comments) '.
'VALUES("Peter", "Maclntyre", "Me again... just"!);';

$database->queryExec($sql);

$sql = "SELECT * FROM guests ORDER BY  iname, fname"; 


?>


<!-- 
    Observe que podemos executar varios comandos simultaniamente 
    porem temos que usar o comando multi_query com SQLite esta 
    disponivel com queryExec.
    ---------------------------------------------------------------
 -->