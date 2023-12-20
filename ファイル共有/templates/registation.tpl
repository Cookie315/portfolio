<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>新規登録画面</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="../.css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
    <div class="container-fruid"></div>
        <div class="row justify-content-center m-5" >
            <div class="col-auto">
                <div class="row justify-content-center">
                    <div class="col-8">
                        <div class="d-flex align-items-center" style="height:100px;"></div>
                        <div class="card bg-dark rounded-0 " style="--bs-bg-opacity: .5;" >
                            <br>
                            <h2 class=" text-white" style="text-align:center">●ご登録情報を記入してください。●</h2>
                            <h5 class="text-danger"style="text-align:center">{$msg}</h5> 
                            <form action="registation.php" method="POST">
                                <div class="row justify-content-center">
                                    <div class="col-8  text-white"><h5>お名前入力</h5><input type="text"id="start" class="form-control" name="name" maxlength="12"value="{$text1}"placeholder="12文字以下"></div>
                                    <div class="col-8 text-white"><h5>ログインID入力　※ローマ字,数字のみ</h5><input type="text" class="form-control"name="id"maxlength="12"value="{$text2}"placeholder="12文字以下"></div>
                                    <div class="col-8 text-white"><h5>パスワード入力　※ローマ字,数字のみ</h5><input type="password" class="form-control"name="pass1"minlength="3" maxlength="12"placeholder="3文字以上12文字以下"></div>
                                    <div class="col-8 text-white"><h5>パスワード再入力(確認用)</h5><input type="password" class="form-control"name="pass2"minlength="3" maxlength="12"placeholder="3文字以上12文字以下"></div>
                                    </div> 
                                    <br>
                                    <p style="text-align:center"><input type="submit"class="btn-square-shadow btn btn-lg"value="登録確認画面へ"></p>
                            </form>
                        <h4><p style="text-align:end"><a class="text-white" style="--bs-text-opacity: .8;" href="main.php">ログイン画面に戻る⇒</a>　</p></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    if(!document.referrer) location.href="http://localhost/ファイル共有/.php/main.php";
    document.getElementById('start').focus();
</script>
</body>