S13
===
<?php
function printTable($cols, $rows){
$aa = 1;
$colss = 0;
  for($c = 1; $c <= $rows; $c++){
    $colss+=$cols;
    for($b = 1; $b <= 10; $b++){  
      for($a = $aa; $a <= $colss; $a++){ 
        echo  $a." * ".$b." = ". $a*$b."\t"; 
        if($a == $colss){ echo "\n";}      
      }      
    }
    echo "\n";
    $aa +=$cols;
  }
}
printTable(5,2);
?>
