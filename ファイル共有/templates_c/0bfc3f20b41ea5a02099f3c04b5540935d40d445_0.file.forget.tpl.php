<?php
/* Smarty version 4.3.4, created on 2023-12-20 12:39:39
  from 'C:\xampp\htdocs\ファイル共有\.php\..\templates\forget.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_658261fbddb6f6_71319663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bfc3f20b41ea5a02099f3c04b5540935d40d445' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ファイル共有\\.php\\..\\templates\\forget.tpl',
      1 => 1703039135,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658261fbddb6f6_71319663 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<head>
    <meta charset="UTF-8">   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <link href="../.css/style.css" rel="stylesheet" type="text/css">
    <title>パスワード確認画面</title>
</head>
<body>
    <div class="container">
        <div class="container-fruid">
            <div class="row justify-content-center m-5">
                <div class="col-auto">
                    <div class="d-flex align-items-center" style="height:100px;"></div>
                    <div class="card bg-dark rounded-0 " style="--bs-bg-opacity: .5;">
                        <div class="card-header bg-dark" style="--bs-bg-opacity: .2; text-align:center"><h2 class="text-white">パスワードを忘れた方</h2></div>
                        <div style="text-align:center"><h5 class="text-white">　ご登録時のお名前とログインIDを入力してください　</h5></div>
                        <h5 class="text-danger"style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h5>
                        <form action="forget.php" method="POST">
                            <div class="row justify-content-center">
                                <div class="col-8 text-white"><h5>お名前入力</h5><input type="text" id="start"class="form-control" name="name" maxlength="12"placeholder="登録時の名前"></div>
                                <div class="col-8 text-white"><h5>ログインID入力</h5><input type="text" class="form-control"name="id"maxlength="12"placeholder="登録時のログインID"></div>
                            </div> 
                            <br>
                            <p style="text-align:center"><input type="submit" class="btn-square-shadow btn btn-lg"value="パスワード確認"></p>
                        </form>
                        <h4><p style="text-align:end"><a  class="text-white" style="--bs-text-opacity: .8;"href="main.php">ログイン画面へ戻る⇒</a>　</p></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php echo '<script'; ?>
>
    if(!document.referrer) location.href="http://localhost/ファイル共有/.php/main.php";
    document.getElementById('start').focus();
    <?php echo '</script'; ?>
><?php }
}
