<?php
$s = new PDO("mysql:host=localhost;dbname=db1","root","root");
$r = $s -> query("SELECT * FROM tb1");

while($re = $r -> fetch()){
    print $re[0].":".$re[1].":".$re[2]."<br>";
}
?>