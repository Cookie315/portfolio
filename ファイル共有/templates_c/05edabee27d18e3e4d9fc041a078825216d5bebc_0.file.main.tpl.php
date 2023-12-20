<?php
/* Smarty version 4.3.4, created on 2023-12-20 11:28:08
  from 'C:\xampp\htdocs\ファイル共有\.php\..\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65825138a01ae4_49797743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05edabee27d18e3e4d9fc041a078825216d5bebc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ファイル共有\\.php\\..\\templates\\main.tpl',
      1 => 1703039152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65825138a01ae4_49797743 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    
    <link href="main.css" rel="stylesheet"media="all">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <link href="../.css/style.css" rel="stylesheet" type="text/css">
    <title>ログイン画面</title>
</head>
<body>
    <div class="container">
        <div class="container-fruid"></div>
            <div class="row justify-content-center m-5" >
                <div class="col-auto">
                    <div class="d-flex align-items-center" style="height:100px;"></div>
                        <div class="card bg-dark rounded-0 " style="--bs-bg-opacity: .5;" >
                            <div class="card-header" style="text-align:center"><h1 style="text-align:center"><font face='arial black'><strong class="text-white">ログイン</strong></font></h1></div><!--ここがカードのヘッダー-->                                                                                                                          
                            <!--ここからがカードの内容-->
                            <div class="text-white" style="text-align:center"><h5>　ご登録されたログインIDとパスワードを入力してください。　</h5></div>
                            <h5 class="text-danger" style="text-align:center"><h5 class="text-danger"style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h5>
                            <div class="col-12">
                            <form method="POST" action="main.php">   
                                <div class="row justify-content-center">
                                    <div class="col-8 text-white"><h5>ログインID ※ローマ字,数字のみ</h5><input type="text"id="start" class="form-control" name="id"value="<?php echo $_smarty_tpl->tpl_vars['text']->value;?>
" maxlength="12"placeholder="登録時のIDを入力"></div> <!--IDのテキストボックス-->
                                    <div class="col-8 text-white"><h5>パスワード ※ローマ字,数字のみ</h5><input type="password" class="form-control"name="pass"maxlength="12" placeholder="登録時のパスワードを入力"></div> <!--パスワードのボックス-->
                                </div>
                            </div>
                             <br>
                            <div class="text-center">
                                <div class="row justify-content-center">
                                <div class="col-6"><input type="submit" class="btn-square-shadow btn btn-lg" value="　　ログイン　　"></div>
                                <input type="hidden" name="nam" value="login">
                            </div>
                        </div>
                    </form>
                    <br>
                    <hr>
                    <h4><p style="text-align:end"><a class="text-white" style="--bs-text-opacity: .8;"href="registation.php"><strong>アカウント作成はこちら⇒</strong></a>　</p></h4>  
                    <h4><p style="text-align:end"><a class="text-white" style="--bs-text-opacity: .8;"href="forget.php"><strong>パスワードを忘れた方はこちら⇒</strong></a>　</p></h4>  
                </div>          
            </div>
        </div>
    </div>
<?php echo '<script'; ?>
>
    document.getElementById('start').focus();
<?php echo '</script'; ?>
>      
</body>
</html>
<?php }
}
