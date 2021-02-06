<?php

function double($a){
    $result = $a * 2;
    return $result;
}
echo double (7) . "\n";


function f($a,$b){
    $result = $a + $b;
    return $result;
}
echo f(3,8) . "\n";



$arr = array(1, 3, 5, 7, 9);
function mul($arr) {
    $result = 1;
    foreach($arr as $val) {
        $result *= $val;
    }
    return $result;
}
echo mul($arr) . "\n";


$arr = array(6, 8, 3, 9, 5);
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
    if ( $max_number < $a ){
        $max_number = $a;
    }

 }

 return $max_number;
 }
 
 echo max_array($arr) . "\n";
 
 
 
 