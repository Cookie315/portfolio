<?php
$s = new PDO("mysql:host=localhost;dbname=db1","root","root");
$b1_d = $_POST["b1"];
$s ->query("DELETE FROM tbk WHERE bang = $b1_d");
$r = $s -> query("SELECT * FROM tbk");
while ($re = $r -> fetch()){
    print $re['bang'].":".$re['nama'].":".$re['mess']."<br>";
}
print "<br><a href='kantan.html'>トップメニューに戻ります</a>";
?>