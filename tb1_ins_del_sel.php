<?php
$s = new PDO("mysql:host=localhost;dbname=db1","root","root");
if(isset($_POST["ins"])){
  $b = $_POST["bang"];
  $n = $_POST["nama"];
  $t = $_POST["tosi"];
  $s -> query("INSERT INTO tb1 VALUES('$b','$n','$t')");
}
if(isset($_POST["del"])){
    $d = $_POST["sakuzyo"];
    $s -> query("DELETE FROM tb1 WHERE bang='$d'");
}
$r = $s -> query("SELECT * FROM tb1");
while($re = $r -> fetch()){
    print $re['bang'].":".$re['nama'].":".$re['tosi']."<br>";
}
?>