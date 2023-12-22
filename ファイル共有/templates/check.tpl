<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="../.css/style.css" rel="stylesheet" type="text/css">
    <title>登録確認画面</title>
</head>
<body>
    <div class="container">
        <div class="container-fruid">
            <div class="row justify-content-center" >
                <div class="col-5">
                    <div class="col-12">               
                        <div class="d-flex align-items-center" style="height:100px;"></div>
                        <div class="card bg-dark rounded-0" style="--bs-bg-opacity: .4;" width="500px">
                            <br>
                            <p><h3 class="text-white" style="text-align:center">●登録内容を確認してください。●</h3></p>
                            <p><h2 class=" text-white" style="text-align:center">・お名前：{$name} </h2></p>
                            <p><h2 class=" text-white" style="text-align:center">　 ・ログインID：{$id}</h2> </p>
                            <p><h2 class=" text-white" style="text-align:center">・パスワード：表示されません。</h2> </p>
                            <p><h3 class=" text-white" style="text-align:center">上記でお間違えありませんか？</h3></p>
                            <div class="row justify-content-center">                                             
                                <div class="col-auto">
                                    <form action="sql.php"method="POST" style="text-align:center" >
                                        <input type="hidden" name="name"value={$name}>
                                        <input type="hidden" name="id"value={$id}>
                                        <input type="hidden" name="pass"value={$pass}>
                                        <input type="submit"class="btn-square-shadow btn btn-lg"onclick="location.href='sql.php'" value="　　登録　　">
                                    </form>     
                                </div>
                               
                            </div> 
                            <br>
                            <div class="col-auto" style="text-align:center">
                                <form action="registation.php" method="POST">
                                    <input type="hidden" name="name"value={$name}>
                                    <input type="hidden" name="id"value={$id}>
                                    <input type="hidden" name="pass1"value="">
                                    <input type="hidden" name="pass2"value="">
                                    <input type="hidden" name="ch"value="ch">
                                    <input type="submit" class="btn rounded-0 btn-square-shadow"value="登録内容変更"></div> 
                                </form>
                                
                        
                            <br>
                        </div>
                </div></div> 
            </div>
        </div>
    </div>
</body>
<script>
    if(!document.referrer) location.href="http://localhost/ファイル共有/.php/main.php";
</script>