<DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
<title>掲示板</title>
</head>
<body>
    <h1>みんなの掲示板</h1>   <!--大きな文字の表示-->
    <h2>【スレッド一覧】</h2>　<!--大きな文字の表示-->
    <?php
    require_once("../data/db_info.php"); //ディレクトリトラバーサルの防止
    $s = new PDO("mysql:host=$SERV;dbname=$DBNM",$USER,$PASS); //データベースから持ってきたものの格納
    //スレッド作成
    $title_d = isset($_GET["title"])?htmlspecialchars($_GET["title"]):null; //issetの三項演算子でtitle_dのなかを空っぽじゃなければそれを格納する
    if($title_d <> ""){ //title_dが""のときというif文
        $s ->query("INSERT INTO tbj0(title,time)VALUES('$title_d',now())");//sに
    }
    //スレッド一覧表示
    $r = $s ->query("SELECT * FROM tbj0");
    while($re = $r ->fetch()){
        print "<a href='keizi.php?tid=$re[0]'>$re[0] $re[1]</a><br>";
    }
    ?>
<hr>
<h2>【スレッド作成】</h2>
<form method="GET" action="keizi_top.php">
    タイトル:<input type="text" name="title" size="50"><br>
    <input type="submit" value="作成">
</form>
<hr>
<h2>【メッセージ検索】</h2>
<a href = "keizi_search.php">検索するときはここをクリック</a>
</body>
</html>    