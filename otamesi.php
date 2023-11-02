<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/bootstrap.min.css" />

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <title>企業実習用</title>
</head>
<body>
<?php
$page =0;
if(isset($_POST["check"])){
    $s = new PDO("mysql:host=localhost;dbname=upload","root","root");
    $N1_d = $_POST["name"];
    $N1_p = $_POST["pass"];
        $re =$s -> quary("SELECT user FROM data");
        while($r = $re ->fetch()){
            if($N1_d = $r[0]){
                if($N1_p = $r[1]){
                    $page=1;
                    break;
                }
            }
        }
        switch ($page) {
            case 0:
                break;
            case 1:
                header('Location: file.php');
                break;
            }
}
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-auto m-5">
            <div class="card" width="500px">
                <div class="card-header"><h2>ログイン画面</h2></div>
            <form action="file.php" method="POST">
                お名前
                    <p>　<input type="text" name="name"placeholder="登録したお名前"></p>
                パスワード
                    <p>　<input type="password" name="pass" placeholder="パスワード入力"></p>

                <p>　<input type="hidden" name="check" value=kakunin>
                    <input class="btn btn-primary btn-lg"type="submit" value="ログイン"></p>
                    <hr>
            </form>
                <p>　<a href="forget.html">パスワードを忘れた方</a></p>   
                <p>　<a href="new.html">新規登録の方</a> </p>
            </div>
        </div>
    </div>    
</div>        
</body>