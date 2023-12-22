<?php
/* Smarty version 4.3.4, created on 2023-12-20 13:31:30
  from 'C:\xampp\htdocs\ファイル共有\.php\..\templates\forgetanser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65826e228d63f9_44637972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32a6405a79d5559946f7914d9ff66d5d7a720ff2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ファイル共有\\.php\\..\\templates\\forgetanser.tpl',
      1 => 1703039141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65826e228d63f9_44637972 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"><?php echo '</script'; ?>
>
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
                        <p><h2 class="text-white" style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
様のパスワードは<?php echo $_smarty_tpl->tpl_vars['pass']->value;?>
です</h2></p>
                        <p style="text-align:center"><input class="btn-square-shadow btn btn-lg" onclick="location.href='main.php'" value="ログイン画面に戻る"></p>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>  
<?php echo '<script'; ?>
>
       if(!document.referrer) location.href="http://localhost/ファイル共有/.php/main.php";
<?php echo '</script'; ?>
>
</body><?php }
}
