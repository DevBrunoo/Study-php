<?php
$db = new PDO('sqlite:testdb.sqlite', null, null, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$db->sqliteCreateFunction('SQRT', 'sqrt', 1);

$stmt = $db->query("SELECT sqrt(25)");
foreach ($stmt as $row) {
    echo $row[0], PHP_EOL; // output: 5.0
}

?>

<h1>Legal</h1>