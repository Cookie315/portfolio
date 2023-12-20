<?php
/* Smarty version 4.3.4, created on 2023-12-20 11:28:12
  from 'C:\xampp\htdocs\ファイル共有\.php\..\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6582513c423949_57822829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cb1e04e611f63fd659d66ede44bbd458dd5e12f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ファイル共有\\.php\\..\\templates\\index.tpl',
      1 => 1703039146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6582513c423949_57822829 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <link href="../.css/style.css" rel="stylesheet" type="text/css">
    <meta http-equiv="refresh" content=" 300; url=../logout.html">
    <title>ようこそ<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
様</title>
</head>
<body>
<?php if ($_smarty_tpl->tpl_vars['mode']->value == 'only') {?>
    <div class="d-flex align-items-center" style="height:30px;"></div>
        <dic class="container-fruid">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-3"><div class="card rounded-0 shadow bg-dark text-white" style="--bs-bg-opacity: .8;"><h1 style="text-align:center">個人ファイル</h1></div></div>
                        <div class="col-4"> <!--共有用ファイルへ遷移--> 
                                                
                            <form action="index.php" method="POST">
                            <input type="hidden"name="mode" value="all">
                            <input type="submit"class="btn btn-dark btn-lg rounded-0 text-white" style="--bs-bg-opacity: .;"disabled value="個人用切替"> 
                            <input type="submit"class="btn btn-light btn-lg rounded-0 border border-dark" value="共有用切替">
                            </form>
                        </div>
                        <div class="col-2"><h4>ようこそ<?php echo $_smarty_tpl->tpl_vars['name2']->value;?>
様</h4></div>
                            <div class="col-3">
                                <div style="text-align:center" onclick="obj=document.getElementById('menu1').style; obj.display=(obj.display=='none')?'block':'none';">
                                    <a style="cursor:pointer;"><button type="button" class="shadow-lg btn btn-dark rounded-0 btn-lg  text-white">アカウントメニュー</button></a>                   
                                    <!--// 折りたたみ展開ボタン -->
                                    <!-- ここから先を折りたたむ -->
                                    <div id="menu1" style="display:none;clear:both;">
                                    <form action="index_passch.php" style="text-align:center" method="POST">
                                        <input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
                                        <input type="hidden" name="pass" value="<?php echo $_smarty_tpl->tpl_vars['pass']->value;?>
">
                                        <input type="hidden" name="nam" value="<?php echo $_smarty_tpl->tpl_vars['nam']->value;?>
">
                                        <input type="hidden" name="form" value=<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
>
                                        <input type="submit"  class="btn btn-success btn-lg shadow rounded-0" value="  パスワード変更 ">
                                    </form>
                                    <form action="index_delete.php" style="text-align:center"method="POST">
                                        <input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
                                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                                        <input type="hidden" name="pass" value="<?php echo $_smarty_tpl->tpl_vars['pass']->value;?>
">
                                        <input type="hidden" name="form" value=<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
>
                                        <input type="submit"  class="btn btn-danger btn-lg shadow rounded-0" value="  アカウント削除 ">
                                    </form>
                                    <form action="main.php"style="text-align:center" method="POST">
                                        <input type="submit"  class="btn btn-warning btn-lg shadow rounded-0"onclick="return confirm('ログアウトしてよろしいですか？')" value="  　ログアウト 　">
                                    </form>
                                </div>
                            </div>
                    <!--// ここまでを折りたたむ -->
                        </div>
                </div>
                
                <br>
                 <div class="row justify-content-center">
                    <div class="col-12">                 
                        <div class="card rounded-0 bg-dark text-white" style="--bs-bg-opacity: .7;" width="80px">
                            <table>                              
                                    <tr>
                                        <th>　　　　　</th>
                                        <th><h3>アップロードファイル選択</h3></th>
                                        <th><form action="index_upload.php"style="text-align:center" method="POST" enctype="multipart/form-data">                                                                  
                                        <input class=" btn btn-lg text-white" type="file" id="example"name="image[]"multiple>
                                        <input type="hidden" name="name" value=<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
>
                                        <input type="hidden" name="form" value=<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
>
                                        <input type="hidden" name="filePath" value=<?php echo $_smarty_tpl->tpl_vars['filePath']->value;?>
>
                                        <input type="hidden" name="sqltable" value=<?php echo $_smarty_tpl->tpl_vars['sqltable']->value;?>
>
                                        <input type="hidden" name="namb" value="<?php echo $_smarty_tpl->tpl_vars['pagenow']->value;?>
">
                                        <input type="hidden" name="pgnam" value="<?php echo $_smarty_tpl->tpl_vars['pagenam']->value;?>
">
                                        <input type="hidden" name="sort" value="<?php echo $_smarty_tpl->tpl_vars['sortnow']->value;?>
">
                                        <input type="hidden" name="sort2" value="<?php echo $_smarty_tpl->tpl_vars['sortnow2']->value;?>
">                                 
                                        <input  type="submit"class = "btn btn-lg btn-success rounded-0" value="アップロード">                                                       
                                        </form></th>
                                        <th></th>
                                     </tr>  
                            </table>
                            
                        </div>  
                          <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

                    </div>
                </div>
            </div>              
        </div>
    </div>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-12">
                        <div class="row justifi-content-between">                           
                            <form action="index_sort.php"method="POST" style="text-align:between">
                                <div class="row justifi-content-between"> 
                                  <div id="page">
                                            <header id="header"></header>
                                            <article id="content">
                                                <div>                                    <h4  style="text-align:end">
                                            <select  name="sort"class="bg-dark text-white"style="--bs-bg-opacity: .7;">
                                                <option value=<?php echo $_smarty_tpl->tpl_vars['sortnow']->value;?>
><?php echo $_smarty_tpl->tpl_vars['default1']->value;?>
</option>
                                                <?php echo $_smarty_tpl->tpl_vars['sortname']->value;?>

                                                <option value="name">ファイル名順</option>	
                                                <option value="type">種類順</option>	
                                                <option value="size">サイズ順</option>	
                                                <option value="date">アップロード日順</option>	
                                            </select>
                                            <select  name="sort2"class="bg-dark text-white"style="--bs-bg-opacity: .7;">
                                                <?php echo $_smarty_tpl->tpl_vars['SORTAD']->value;?>

                                                <?php echo $_smarty_tpl->tpl_vars['SORTDA']->value;?>

                                            </select>　
                                                <input type="hidden" name="name" value=<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
>
                                                <input type="hidden" name="id" value=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
>
                                                <input type="hidden" name="pass" value=<?php echo $_smarty_tpl->tpl_vars['pass']->value;?>
>
                                                <input type="hidden" name="nam" value=<?php echo $_smarty_tpl->tpl_vars['nam']->value;?>
>
                                                <input type="hidden" name="form" value=<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
>
      
                                                <input type="submit"class="btn btn-success btn-lg rounded-0" value="並び替え">
                                            </form></h4></div>
                                                <div></div>
                                                <div></div>
                                            </article>
                                            <aside id="sidebar">
                                                <div></div>
                                                <div></div>
                                            </aside>
                                            <footer id="footer"></footer>
                                            </div>                                     
                                    <form action="page.php"method="POST" style="text-align:between">
                                    <input type="hidden" name="name" value=<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
>
                                        <input type="hidden" name="id" value=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
>
                                        <input type="hidden" name="pass" value=<?php echo $_smarty_tpl->tpl_vars['pass']->value;?>
>
                                        <input type="hidden" name="form" value=<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
>
                                        <input type="hidden" name="filePath" value=<?php echo $_smarty_tpl->tpl_vars['filePath']->value;?>
>
                                        <input type="hidden" name="sqltable" value=<?php echo $_smarty_tpl->tpl_vars['sqltable']->value;?>
>         
                                <div class="row">
                                    <div class="col-auto">
                                        <input type="submit" class="btn btn-primary text-white btn-lg rounded-0" value="一括ダウンロード" id="submit" disabled name="alldtl"formaction="index_bulk1.php" formmethod="POST"　formmethod="POST"/>
                                    </div>
                                    <div class="col-auto">
                                        <input type="submit" class="btn btn-danger btn-lg rounded-0"id="submit2" disabled  value="一括削除" name="alldt"formaction="index_bulk2.php"  onclick="return confirm('選択項目を一括削除しますか？')"　formmethod="POST"/>
                                    </div>
                                </div>
                                <br>
                                <table class="table table table-bordered table-striped">
                                <thead class="table-dark text-white">
                                <tr>
                                
                                            <th scope="col-1"style="text-align:center"><input type="button"id="btn"class="btn btn-m btn-primary rounded-0"<?php echo $_smarty_tpl->tpl_vars['allcheck']->value;?>
 value="全選択" onclick="checkAll()"></th>                                            
                                            <th scope="col-3"style="text-align:center"><h5>ファイル名</h5></th>
                                            <th scope="col-1"style="text-align:center"><h5>種類</h5></th>
                                            <th scope="col-2"style="text-align:center"><h5>サイズ</h5></th>
                                            <th scope="col-3"style="text-align:center"><h5>アップロード日</h5></th>
                                            <th scope="col-1"style="text-align:center"><h5>ダウンロード</h5></th>
                                            <th scope="col-1"style="text-align:center"><h5>削除</h5></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                                        
                                <?php echo '<script'; ?>
>
                                    if(!document.referrer) location.href="http://localhost/ファイル共有/.php/main.php";
                                    <?php echo '</script'; ?>
>
                                </body>
<?php } else { ?>
<div class="d-flex align-items-center" style="height:30px;"></div>
    <dic class="container-fruid">
        <div class="container">
        <div class="row">
            <div class="col-3"><div class="card rounded-0 bg-light border border-dark" style="--bs-bg-opacity: .6;"><h1 style="text-align:center">共有ファイル</h1></div></div>
            <div class="col-4">                       
                <form action="index.php" method="POST">
                    <input type="hidden"name="mode" value="only">
             <input type="submit"class="btn btn-dark btn-lg rounded-0" value="個人用切替">
             <input type="submit"class="btn btn-light btn-lg rounded-0"disabled value="共有用切替">
             </form>
            </div>
            <div class="col-2"><h4>ようこそ<?php echo $_smarty_tpl->tpl_vars['name2']->value;?>
様</h4></div>
            <div class="col-3">
                <div style="text-align:center" onclick="obj=document.getElementById('menu1').style; obj.display=(obj.display=='none')?'block':'none';">
                    <a style="cursor:pointer;"><button type="button" class="shadow-lg btn btn-dark rounded-0 btn-lg ">アカウントメニュー</button></a>                   
                    <!--// 折りたたみ展開ボタン -->
                    
                    <!-- ここから先を折りたたむ -->
                    <div id="menu1" style="display:none;clear:both;">
                    <form action="index_passch.php" style="text-align:center" method="POST">
                        <input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
                        <input type="hidden" name="pass" value="<?php echo $_smarty_tpl->tpl_vars['pass']->value;?>
">
                        <input type="hidden" name="nam" value="<?php echo $_smarty_tpl->tpl_vars['nam']->value;?>
">
                        <input type="hidden" name="form" value=<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
>
                        <input type="submit"  class="btn btn-success btn-lg shadow rounded-0" value="  パスワード変更 ">
                    </form>
                    <form action="index_delete.php" style="text-align:center"method="POST">
                        <input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                        <input type="hidden" name="pass" value="<?php echo $_smarty_tpl->tpl_vars['pass']->value;?>
">
                        <input type="hidden" name="form" value=<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
>
                        <input type="submit"  class="btn btn-danger btn-lg shadow rounded-0" value="  アカウント削除 ">
                    </form>
                    <form action="main.php"style="text-align:center" method="POST">
                        <input type="submit"  class="btn btn-warning btn-lg shadow rounded-0"onclick="return confirm('ログアウトしてよろしいですか？')" value="　  ログアウト 　">
                    </form>
                    </div></div>
                    <!--// ここまでを折りたたむ -->         
            </div>
        </div>
        <br>
             <div class="row justify-content-center">
                <div class="col-12">
                <div class="card rounded-0 bg-light border border-dark" style="--bs-bg-opacity: .6;" width="80px">
                    <table>                              
                        <tr>
                            <th>　　　　　</th>
                            <th><h2>アップロードファイル選択</h2></th>
                            <th><form action="index_upload.php"style="text-align:center" method="POST" enctype="multipart/form-data">                                                                  
                                <input class=" btn btn-lg" type="file" id="example"name="image[]"multiple>
                                <input type="hidden" name="name" value=<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
>
                                <input type="hidden" name="form" value=<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
>
                                <input type="hidden" name="filePath" value=<?php echo $_smarty_tpl->tpl_vars['filePath']->value;?>
>
                                <input type="hidden" name="sqltable" value=<?php echo $_smarty_tpl->tpl_vars['sqltable']->value;?>
>
                                <input type="hidden" name="namb" value="<?php echo $_smarty_tpl->tpl_vars['pagenow']->value;?>
">
                                <input type="hidden" name="pgnam" value="<?php echo $_smarty_tpl->tpl_vars['pagenam']->value;?>
">
                                <input type="hidden" name="sort" value="<?php echo $_smarty_tpl->tpl_vars['sortnow']->value;?>
">
                                <input type="hidden" name="sort2" value="<?php echo $_smarty_tpl->tpl_vars['sortnow2']->value;?>
">                                     
                                <input  type="submit"class = "btn btn-lg btn-success rounded-0" value="アップロード">                                                      
                            </form></th>
                            <th></th>
                         </tr>  
                </table>
                
            </div>  
              <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

        </div>
    </div>
</div>              
</div>
</div>
<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="row">
    <div class="col-sm-12">
        <div class="col-sm-12">
            <div class="row justifi-content-between">             
                                        <form action="index_sort.php"method="POST" style="text-align:between">   
                                        <div class="row justifi-content-between">
                                     <div id="page">
                                            <header id="header"></header>
                                            <article id="content">
                                                <div>                                    <h4  style="text-align:end">
                                            <select  name="sort"class="bg-light"style="--bs-bg-opacity: .8;">
                                                <option value=<?php echo $_smarty_tpl->tpl_vars['sortnow']->value;?>
><?php echo $_smarty_tpl->tpl_vars['default1']->value;?>
</option>
                                                <?php echo $_smarty_tpl->tpl_vars['sortname']->value;?>

                                                <option value="name">ファイル名順</option>	
                                                <option value="type">種類順</option>	
                                                <option value="size">サイズ順</option>
                                                <option value="username">アップロード者</option>		
                                                <option value="date">アップロード日順</option>	
                                            </select>
                                            <select  name="sort2"class="bg-light"style="--bs-bg-opacity: .8;">
                                                <?php echo $_smarty_tpl->tpl_vars['SORTAD']->value;?>

                                                <?php echo $_smarty_tpl->tpl_vars['SORTDA']->value;?>

                                            </select>　
                                                <input type="hidden" name="name" value=<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
>
                                                <input type="hidden" name="id" value=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
>
                                                <input type="hidden" name="pass" value=<?php echo $_smarty_tpl->tpl_vars['pass']->value;?>
>
                                                <input type="hidden" name="nam" value=<?php echo $_smarty_tpl->tpl_vars['nam']->value;?>
>
                                                <input type="hidden" name="form" value=<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
>
      
                                                <input type="submit"class="btn btn-success btn-lg rounded-0" value="並び替え">
                                            </form></h4></div>
                                                <div></div>
                                                <div></div>
                                            </article>
                                            <aside id="sidebar">
                                                <div></div>
                                                <div></div>
                                            </aside>
                                            <footer id="footer"></footer>
                                            </div>    
                                            <form action="bulk1.php"method="POST" style="text-align:between">
                                                <input type="hidden" name="name" value=<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
>
                                                    <input type="hidden" name="id" value=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
>
                                                    <input type="hidden" name="pass" value=<?php echo $_smarty_tpl->tpl_vars['pass']->value;?>
>
                                                    <input type="hidden" name="form" value=<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
>
                                                    <input type="hidden" name="filePath" value=<?php echo $_smarty_tpl->tpl_vars['filePath']->value;?>
>
                                                    <input type="hidden" name="sqltable" value=<?php echo $_smarty_tpl->tpl_vars['sqltable']->value;?>
>              
                                         <div class="row">
                                             <div class="col-auto">
                                                 <input type="submit" class="btn btn-primary btn-lg rounded-0" value="一括ダウンロード" id="submit" disabled name="alldtl"formaction="index_bulk1.php" formmethod="POST"　formmethod="POST"/>
                                             </div>
                                             <div class="col-auto">
                                                 <input type="submit" class="btn btn-danger btn-lg rounded-0"id="submit2" disabled  value="一括削除" name="alldt"formaction="index_bulk2.php"  onclick="return confirm('選択項目を一括削除しますか？')"　formmethod="POST"/>
                                             </div>
                                         </div>
                                         <br>
                                         <table class="table table-light table-bordered table-striped ">
                                         <thead class="table-dark">
                                            <tr>
                                        <th scope="col-1"style="text-align:center"><input type="button"id="btn"class="btn btn-m btn-primary rounded-0"<?php echo $_smarty_tpl->tpl_vars['allcheck']->value;?>
 value="全選択" onclick="checkAll()"></th>                                                    
                                        <th scope="col-3"style="text-align:center"><h5>ファイル名</h5></th>
                                        <th scope="col-1"style="text-align:center"><h5>種類</h5></th>
                                        <th scope="col-2"style="text-align:center"><h5>サイズ</h5></th>
                                        <th scope="col-3"style="text-align:center"><h5>アップロード日</h5></th>
                                        <th scope="col-1"style="text-align:center"><h5>アップロード者</h5></th>
                                        <th scope="col-1"style="text-align:center"><h5>ダウンロード</h5></th>
                                        <th scope="col-1"style="text-align:center"><h5>削除</h5></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                                                
                                        <?php echo '<script'; ?>
>
                                            if(!document.referrer) location.href="http://localhost/ファイル共有/.php/main.php";
                                            <?php echo '</script'; ?>
>
                                        </body>
<?php }
}
}
