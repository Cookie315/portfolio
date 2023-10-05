<?php
$m = array("0","10","20","30","40","50","60");
$i =0;
$a = 0;
foreach($m as $m1){   
    if($i == 0){
      $i++;  
    }
    else{
        $a = $a + $m1;
        print $i."月累計".$a."<br>";
        $i++;
    }    
}
?>