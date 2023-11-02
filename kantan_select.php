<?php
$s = new PDO("mysql:host=localhost;dbname=db1","root","root");
$r = $s -> query("SELECT * FROM tbk");
while($re = $r ->fetch()){
    print $re['bang'].":".$re['nama'].":".$re['mess']."<br>";
}
print"<br><a href='kantan.html'>トップメニューに戻ります</a>";
?>