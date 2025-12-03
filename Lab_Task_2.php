<?php

  $ans1 = 0;
  $ans2 = 1;
  $ans3 = 0;
  for($x=2; $x<=500; $x++){
    $ok = 0;
    for($i=2; $i<$x; $i++ ){
        if($x % $i == 0){
            $ok=1;
            break;
        }
    }
    if($ok==0){
       $ans1++;
    } 
    if(((int)(sqrt($x)) * (int)(sqrt($x))) == $x){
        $ans2++;
    }
    if($x%8 == 0){
        $ans3++;
    }

  }

  echo "Prime numbers: ";
  echo $ans1;
  echo "<br>";

  echo "Perfect squares: ";
  echo $ans2;
  echo "<br>";

  echo "Even & divisable by 8: ";
  echo $ans3;
  echo "<br>";

?>