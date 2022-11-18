<?php 
//faça bloqueio exclusivo
if (flock($file_handle, LOCK_EX)){
if(fwrite($file_handle, $question1) == FALSE) {
    echo "Cannot write to file ($filename)";
}
//libere o bloqueio
flock($file_handle, LOCK_UN);
}

?>

<!-- 
    Primeiro tentamos conseguir um bloqurio exclusivo
    no arquivo em questao usando a funcao flock() isso 
    ira garantir que nenhum outro processo podera acessar o 
    arquivo emquanto operamos nele. 

    A operacao de gravacao do arquivo usa $file_handle 
    para adicionar conteudo a variavel $question1
 -->