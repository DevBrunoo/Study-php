
<?php
session_start();
$today = date("Y-m-d"); // carregue a data de hoje no formato AAAA-// MM-DD
$_SESSION['today'] ; //adicione esse valor a secao 
$_SESSION['login_name'] = "Peter"; //adicione um valor da sessao para // o nome de lgion

?>