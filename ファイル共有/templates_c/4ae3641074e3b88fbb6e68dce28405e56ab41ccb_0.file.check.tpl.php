<?php
/* Smarty version 4.3.4, created on 2023-12-20 13:15:10
  from 'C:\xampp\htdocs\ファイル共有\.php\..\templates\check.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65826a4e978721_47739322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ae3641074e3b88fbb6e68dce28405e56ab41ccb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ファイル共有\\.php\\..\\templates\\check.tpl',
      1 => 1703045677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65826a4e978721_47739322 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"><?php echo '</script'; ?>
>
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
                            <p><h2 class=" text-white" style="text-align:center">・お名前：<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 </h2></p>
                            <p><h2 class=" text-white" style="text-align:center">　 ・ログインID：<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</h2> </p>
                            <p><h2 class=" text-white" style="text-align:center">・パスワード：表示されません。</h2> </p>
                            <p><h3 class=" text-white" style="text-align:center">上記でお間違えありませんか？</h3></p>
                            <div class="row justify-content-center">                                             
                                <div class="col-auto">
                                    <form action="sql.php"method="POST" style="text-align:center" >
                                        <input type="hidden" name="name"value=<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
>
                                        <input type="hidden" name="id"value=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
>
                                        <input type="hidden" name="pass"value=<?php echo $_smarty_tpl->tpl_vars['pass']->value;?>
>
                                        <input type="submit"class="btn-square-shadow btn btn-lg"onclick="location.href='sql.php'" value="　　登録　　">
                                    </form>     
                                </div>
                               
                            </div> 
                            <br>
                            <div class="col-auto" style="text-align:center">
                                <form action="registation.php" method="POST">
                                    <input type="hidden" name="name"value=<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
>
                                    <input type="hidden" name="id"value=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
>
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
<?php echo '<script'; ?>
>
    if(!document.referrer) location.href="http://localhost/ファイル共有/.php/main.php";
<?php echo '</script'; ?>
><?php }
}
