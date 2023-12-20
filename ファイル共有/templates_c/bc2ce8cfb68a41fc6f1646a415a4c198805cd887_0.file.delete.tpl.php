<?php
/* Smarty version 4.3.4, created on 2023-12-15 22:34:34
  from 'C:\xampp\htdocs\ファイル共有\.php\..\templates\delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_657c55ea485f55_32038009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc2ce8cfb68a41fc6f1646a415a4c198805cd887' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ファイル共有\\.php\\..\\templates\\delete.tpl',
      1 => 1702647260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657c55ea485f55_32038009 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <link href="../.css/style2 copy.css" rel="stylesheet" type="text/css">
    <meta http-equiv="refresh" content=" 300; url=../logout.html">
    <title>アカウント削除確認</title>
</head>
<body>
    <div class="container">
        <div class="container-fruid"></div>
        <div class="row justify-content-center m-5" >
            <div class="col-auto">
                <div class="d-flex align-items-center" style="height:100px;"></div>
                <div class="card card bg-dark rounded-0 " style="--bs-bg-opacity: .4;"  width="500px">
                    <div class="card-header bg-dark rounded-0 " style="--bs-bg-opacity: .5;">
                        <h1 class="text-danger" style="text-align:center">⚠アカウント削除確認⚠</h1>
                    </div>              
                    <h3 class="text-warning" style="text-align:center">本当にアカウントを削除しますか？</h3>
                    <h4 class="text-danger"style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h4>
                    <div class="row justify-content-center">                     
                        <form action="index_delete.php"method="POST">
                            <div class="row justify-content-center">                           
                                <input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                                <input type="hidden" name="pass" value="<?php echo $_smarty_tpl->tpl_vars['pass']->value;?>
">
                                <input type="hidden" name="form" value="<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
">                            
                                <div class="col-7 text-white">
                                    <h5 >パスワード確認</h5>
                                    <input type="password"id="start" class="form-control" name="pass2" maxlength="12" placeholder="本人確認用"></h5>
                                </div> <!--パスワード-->  
                            </div>
                            <div class="buttonwrap"style="text-align:center">
                                <br>
                                <h4 class="text-warning" style="text-align:center">※注意:共有用にアップロードされているものは残ります。</h4>
                                <p><input type="submit" class="btn btn-square-shadow-red  btn-lg"onclick="return confirm('アカウントを削除してよろしいですか？')" value="アカウント削除"></p>
                            </div>
                        </form>                       
                        <form action="<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
" method="POST">
                            <p style="text-align:center"><input type="submit" class="btn btn-square-shadow btn-lg"value="ホームに戻る">
                        </form>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</body>
<?php echo '<script'; ?>
>
    if(!document.referrer) location.href="http://localhost/ファイル共有/.php/main.php";
    document.getElementById('start').focus();
<?php echo '</script'; ?>
><?php }
}
