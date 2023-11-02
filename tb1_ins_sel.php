<?php
$s = new PDO("mysql:host=localhost;dbname=db1","root","root");
$b = $_POST["bang"];
$n = $_POST["nama"];
$t = $_POST["tosi"];
$s -> query("INSERT INTO tb1 VALUES('$b','$n','$t')");
$r = $s -> query("SELECT * FROM tb1");
while($re = $r -> fetch()){
    print $re['bang'].":".$re['nama'].":".$re['tosi']."<br>";
}
?>