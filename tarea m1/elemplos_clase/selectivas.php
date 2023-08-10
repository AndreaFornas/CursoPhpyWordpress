<?php 

//if elseif - else
$a = 10;
$b = 10;

if ($a > $b) {
    echo $a ." es mayor que ". $b ."<br>";
}elseif ($a < $b){

    echo $a ." es menor que ". $b ."<br>";
} else {

    echo $a ." es igual que ". $b ."<br>";
}

echo "continua el programa";
?>
<?php
//switch-case
$i = 5;
switch ($i){
    case 0:
        echo "<br> i es igual a 0";
        break;
    case 1:
        echo "<br> i es igual a 1";
        break;
    case 2:
        echo "<br> i es igual a 2";
        break;  
    default:
        echo "<br> i es un numero mayor a 2";
}

?>