<?php
$s = new PDO("mysql:host=localhost;dbname=db1","root","root");
$a1_d = $_POST["a1"];
$a2_d = $_POST["a2"];
$s -> query("INSERT INTO tbk (nama,mess) VALUES ('$a1_d','$a2_d')");
$r = $s-> query("SELECT * FROM tbk");
while($re = $r -> fetch()){
    print $re['bang'].":".$re['nama'].":".$re['mess']."<br>";
}
print "<br><a href=kantan.html>トップメニューに戻ります</a>";
?>