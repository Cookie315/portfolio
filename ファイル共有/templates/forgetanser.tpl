<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <meta http-equiv="refresh" content="5; url=../.php/main.php">
    <link href="../.css/style.css" rel="stylesheet" type="text/css">
    <title>あなたのパスワード</title>
</head>
<body>
    <div class="container">
        <div class="container-fruid">
            <div class="row justify-content-center m-5">
                <div class="col-auto">
                    <div class="d-flex align-items-center" style="height:100px;"></div>
                    <div class="card bg-dark rounded-0" style="--bs-bg-opacity: .5;" width="500px">
                        <br>
                        <p><h3 style="text-align:center"class="text-warning">この画面は５秒後に自動的にログイン画面に戻ります。</h3></p>
                        <p><h2 class="text-white" style="text-align:center">{$name}様のパスワードは{$pass}です</h2></p>
                        <p style="text-align:center"><input class="btn-square-shadow btn btn-lg" onclick="location.href='main.php'" value="ログイン画面に戻る"></p>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>  
<script>
       if(!document.referrer) location.href="http://localhost/ファイル共有/.php/main.php";
</script>
</body>