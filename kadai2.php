<?php

$name = 'rina';
if($name ='rina'){
    echo '私は里菜です' . "\n";
} else {
    echo "私は里菜ではありません" . "\n";
}



$total = 0;
//$iが条件を満たしている間、次の{}の中が実行されます
for($i = 1; $i <= 10000; $i++){
    $total =$total + $i;
}
echo $total . "\n";

$fruits = array("orange" ,"cherry","grape","lemon","melon");
foreach($fruits as $fruit){
    echo "要素は" . $fruit;
    echo "\n";
}

/* for文の始めの値を定義する /
$start = 1;
/* for文の終わりの値を定義する */

$start = 1;
$end = 100;

for($i = $start; $i <= $end ; $i++){
    
  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
      echo $i;
      echo "\n";
  }
 
}
