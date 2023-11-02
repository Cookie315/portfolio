<?php
$s = new PDO("mysql:host=localhost;dbname=db1","root","root");
//送信された処理区分データｈを取得し＄h_dに代入
$h_d=$_POST["h"];
//$h_dにより分岐
switch("$h_d"){
    case "sel":
        $r = $s -> query("SELECT * FROM tbk");
        break;
    case "ins":
        $a1_d = $_POST["a1"];
        $a2_d = $_POST["a2"];
        $s -> query("INSERT INTO tbk (nama,mess) VALUES ('$a1_d','$a2_d')");
        $r = $s-> query("SELECT * FROM tbk");
        break;
    case "del":
        $b1_d = $_POST["b1"];
        $s ->query("DELETE FROM tbk WHERE bang = $b1_d");
        $r = $s -> query("SELECT * FROM tbk");
        break;
    case "all":
        $b2_d = $_POST["b2"];
        $s ->query("DELETE FROM tbk");
        $s ->query("ALTER TABLE tbk auto_increment=1");//番号を１に戻すため
        $r = $s -> query("SELECT * FROM tbk");      
        break;
    case "ser":
        $c1_d=$_POST["c1"];
        $r = $s -> query("SELECT * FROM tbk WHERE mess LIKE '%$c1_d%'");
        break;
}
//クエリの結果表示
while($re = $r -> fetch()){
    print $re['bang'].":".$re['nama'].":".$re['mess']."<br>";
}
print "<br><a href=kantan3.html>トップメニューに戻ります</a>";
?>