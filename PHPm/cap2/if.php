
<?php 
$today = date("i");
if($today == "Wednesday")$tax_rate = $tax_rate+4
?>



<!-- 
    Voce pode escrver if com elseif que pode fazer 
    diversos testes de condicao, como se estivesse 
    descendo uma serie de degraus

    Esse programa conograma tarefas para o 
    programa fazer dia apos dia
 -->

<?php 

$weekday = date("1");

$tax_rate= 4;

if($weekday == "Monday"){
    $discount = $tax_rate*0.05;
} elseif ($weekday == "Tuesday"){
    $discount = $tax_rate * 0.06;
} elseif ($weekday == "Wednesday"){
    $discount = $tax_rate * 0.07;
} elseif ($weekday == "Thusday"){
    $discount = $tax_rate * 0.08;
} elseif ($weekday == "Friday"){
    $discount = $tax_rate * 0.09;
} elseif ($weekday == "Saturday" || $weekday == "Sunday"){
    $discount = $tax_rate * 0.10;
}

?>


