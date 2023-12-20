<?php
/* Smarty version 4.3.4, created on 2023-12-15 22:08:21
  from 'C:\xampp\htdocs\ファイル共有\.php\..\templates\registation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_657c4fc5bdaa50_00715771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5846f51c8774e1582ad5960e168179f1c2ba0fd4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ファイル共有\\.php\\..\\templates\\registation.tpl',
      1 => 1702645671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657c4fc5bdaa50_00715771 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>新規登録画面</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <link href="../.css/style2 copy.css" rel="stylesheet" type="text/css">
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
                            <h5 class="text-danger"style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h5> 
                            <form action="registation.php" method="POST">
                                <div class="row justify-content-center">
                                    <div class="col-8  text-white"><h5>お名前入力</h5><input type="text"id="start" class="form-control" name="name" maxlength="12"value="<?php echo $_smarty_tpl->tpl_vars['text1']->value;?>
"placeholder="12文字以下"></div>
                                    <div class="col-8 text-white"><h5>ログインID入力　※ローマ字,数字のみ</h5><input type="text" class="form-control"name="id"maxlength="12"value="<?php echo $_smarty_tpl->tpl_vars['text2']->value;?>
"placeholder="12文字以下"></div>
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
<?php echo '<script'; ?>
>
    if(!document.referrer) location.href="http://localhost/ファイル共有/.php/main.php";
    document.getElementById('start').focus();
<?php echo '</script'; ?>
>
</body><?php }
}
