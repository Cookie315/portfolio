<?php
/* Smarty version 4.3.4, created on 2023-12-15 22:25:23
  from 'C:\xampp\htdocs\ファイル共有\.php\..\templates\passch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_657c53c3b2dae7_69641969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bd50e444a191c787022e748c96ace5a4a9f04ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ファイル共有\\.php\\..\\templates\\passch.tpl',
      1 => 1702646717,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657c53c3b2dae7_69641969 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>パスワード変更</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <link href="../.css/style2 copy.css" rel="stylesheet" type="text/css">
    <meta http-equiv="refresh" content=" 300; url=../logout.html">
</head>
<body>
    <div class="container">
        <div class="container-fruid"></div>
            <div class="row justify-content-center m-5" >
                <div class="col-auto">
                    <div class="d-flex align-items-center" style="height:100px;"></div>                  
                    <div class="card rounded-0 shadow bg-dark" style="--bs-bg-opacity: .5;" wedth="300px">
                        <br>
                        <h2 class="text-white" style="text-align:center">新しいパスワードを設定してください。</h2>
                        <h5 class="text-danger"style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h5>
                        <form action="index_passch.php" method="POST">
                            <input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
                            <input type="hidden" name="nam" value="chenge"><!--chengeに変更によりパスワード変更-->
                            <input type="hidden" name="pass" value="<?php echo $_smarty_tpl->tpl_vars['pass']->value;?>
">
                            <input type="hidden" name="form" value=<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
>
                            <div class="row justify-content-center">
                                <div class="col-8 text-white"><h5>今までのパスワード </h5><input type="password"id="start" class="form-control"minlength="3" maxlength="12"name="pass0"placeholder="今までのパスワードを入力"></div> <!--パスワードのボックス-->
                                <div class="col-8 text-white"><h5>新しいパスワード ※ローマ字,数字のみ </h5><input type="password" class="form-control"minlength="3" maxlength="12"name="pass1"placeholder="新しいパスワードを入力"></div> <!--パスワードのボックス-->
                                <div class="col-8 text-white"><h5>新しいパスワード(確認用) </h5><input type="password" class="form-control"minlength="3" maxlength="12"name="pass2"placeholder="新しいパスワードを入力"></div> <!--パスワードのボックス-->                                         
                            </div>
                                <br> 
                                <p style="text-align:center"><input type="submit" class="btn btn-lg btn-square-shadow "value="パスワード変更"></p>   
                        </form>
                        <form action="<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
" method="POST">
                            <p style="text-align:center"><input type="submit" class="btn btn-square-shadow "value="ホームに戻る"></p>
                        </form>
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
</body>
<?php }
}
