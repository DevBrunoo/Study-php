<?php 


$result = $database->query($sql);

while($row = $result->fetch()){
    echo $row['fname']."".$row['ianame'];
    echo "made these comments:" .substr($row['comments'],0,150);
    echo "<br/>";
}

?>