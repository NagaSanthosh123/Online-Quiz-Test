<?php
  for($i=1;$i<=10;$i+=1){
    $x=0;
    $c[$x++]="q" . $i . "<br>";
    for($j=1;$j<=4;$j+=1){
      $c[$x++]="q" . $i . "o" . $j . "<br>";
    }
    $c[$x++]="q" . $i . "c" . "<br>";
    print_r($c);
  }

?>