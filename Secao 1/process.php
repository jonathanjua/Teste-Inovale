<?php
$value_1 = $_POST["value_1"];
$value_2 = $_POST["value_2"];

if ($value_1 == $value_2) {
    echo "Os numeros sao iguais \n ";
} else {
    echo "Os numeros sao diferentes \n ";

    if($value_1 > $value_2){
        echo "O numero maior e: ".$value_1."\n" ;
    }else{
        echo ", O numero maior e: ".$value_2."\n" ;
    }
}
