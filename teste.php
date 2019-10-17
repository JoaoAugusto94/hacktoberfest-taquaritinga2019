<?php
echo 'olá mundo!';
$a = 100;
$b = 200;
$total = $a + $b;
echo '<br>';
echo $total;
// echo '<br>' .$total;
// echo "<br>$total";
echo'<br>';
var_dump($total);
echo '<br>';
if($total >= 300){
    echo 'Maior que 300';
} elseif($total == 300){
    echo 'Igual que 300';
} else {
    echo 'Menor que 300';
}