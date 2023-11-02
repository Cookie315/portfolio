<?php
    require('db_connect.php');

    $name = $_POST['name'];
    $password = $_POST['password'];
    $submit = $_POST['submit'];

    if(!empty($submit)){
        $pdo = db_connect();

        try {
            $sql = "SELECT * FROM users WHERE name = :name";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->execute();
        }catch(PDOException $e){
            echo 'エラー:'.$e -> getMessage();
            die();
        }

        if($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
            if(password_verify($password,$row['password'])){
                header("Location:main.php");
                exit;
            }
        }else{
            echo '<p color="red">パスワードか名前に間違いがあります。</p>';
        }
    }
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ログインページ</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="title-area">
            <h1>ログインページ</h1>
        </div>
        <form action="" method="POST">
            <input type="text" class="input-area" name="name" placeholder="Your Name" required> <br>
            <input type="password" class="input-area" name="password" placeholder="Your Password" required> <br>
            <input type="submit" class="input-area submit" name="submit" value="Log in">
        </form>
    </body>
</html>