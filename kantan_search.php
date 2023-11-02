<?php
$s = new PDO("mysql:host=localhost;dbname=db1","root","root");
$c1_d=$_POST["c1"];
$r = $s -> query("SELECT * FROM tbk WHERE mess LIKE '%$c1_d%'");
while($re = $r ->fetch()){
    print $re['bang'].":".$re['nama'].":".$re['mess']."<br>";
}
print "<br><a href=kantan.html>トップメニューに戻ります</a>";
?>