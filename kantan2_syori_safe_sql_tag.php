<?php
require_once("../data/db_info.php");
$s = new PDO("mysql:host=$SERV;dbname=$DBNM",$USER,$PASS);
// 送信された処理区分データhを取得し$h_dに代入
$h_d=$_POST["h"];
// $h_dにより分岐
switch("$h_d"){
	case "sel":
		$r = $s -> query("SELECT * FROM tbk");
		break;
	case "ins":
		$a1_d = $_POST["a1"];
		$a2_d = htmlspecialchars($_POST["a2"]);
		$s -> query("INSERT INTO tbk (nama,mess) VALUES ('$a1_d','$a2_d')");
		$r = $s -> query("SELECT * FROM tbk");
		break;
	case "del":
		$b1_d = $_POST["b1"];
		if(preg_match("/[^0-9]/",$b1_d)){
			print "数字以外は入力できません<br>";
		}
		else{$s -> query("DELETE FROM tbk WHERE bang = $b1_d");
		}
		$r = $s -> query("SELECT * FROM tbk");
		break;
	case "ser":
		$c1_d = $_POST["c1"];
		if(preg_match("/[;]/",$c1_d)){	
			print "不正な文字が入力されました！<br>";
			$c1_d = "";
		}
		$r = $s -> query("SELECT * FROM tbk WHERE mess LIKE '%$c1_d%'");
		break;
}
// クエリの結果を表示
while ($re = $r -> fetch()) {
	print $re['bang']." : ".$re['nama']." : ".$re['mess']."<br>";
}
print "<br><a href='kantan2_safe_sql_tag.html'>トップメニューに戻ります</a>";
?>
