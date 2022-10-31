<?php
     $nome = $_GET['nome'];
     $email = $_GET['email'];
//if(count($_GET)){
    if($email > 0)
    {
    echo ' Nome: ' . ($_GET['nome'] ?? '') . "<br>";
    echo ' E-mail: ' . ($_GET['email'] ?? '') . "<br>";
} else {
    /* 
    Se o usuario nao digitar seu email e nome
    vai retorna um alert falando que algo deu errado
    ---------------------------------------------------
    */
    echo '<script>alert("Algo esta incorreto")</script>',
    include 'inscreva.php';
    /* echo '<style>
    body{
        background-color: black;
    } 
    h1 {
        color: white;
        text-align: center;
    }
</style>
<body>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
    <h1>Tente novamente <br>digitando seu email e nome</h1>
</body>'; */
}

?>


