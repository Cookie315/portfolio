<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="../.css/style.css" rel="stylesheet" type="text/css">
    <meta http-equiv="refresh" content=" 300; url=../logout.html">
    <title>ようこそ{$name}様</title>
</head>
<body>
{if $mode == only}
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
                        <div class="col-2"><h4>ようこそ{$name2}様</h4></div>
                            <div class="col-3">
                                <div style="text-align:center" onclick="obj=document.getElementById('menu1').style; obj.display=(obj.display=='none')?'block':'none';">
                                    <a style="cursor:pointer;"><button type="button" class="shadow-lg btn btn-dark rounded-0 btn-lg  text-white">アカウントメニュー</button></a>                   
                                    <!--// 折りたたみ展開ボタン -->
                                    <!-- ここから先を折りたたむ -->
                                    <div id="menu1" style="display:none;clear:both;">
                                    <form action="index_passch.php" style="text-align:center" method="POST">
                                        <input type="hidden" name="name" value="{$name}">
                                        <input type="hidden" name="pass" value="{$pass}">
                                        <input type="hidden" name="nam" value="{$nam}">
                                        <input type="hidden" name="form" value={$form}>
                                        <input type="submit"  class="btn btn-success btn-lg shadow rounded-0" value="  パスワード変更 ">
                                    </form>
                                    <form action="index_delete.php" style="text-align:center"method="POST">
                                        <input type="hidden" name="name" value="{$name}">
                                        <input type="hidden" name="id" value="{$id}">
                                        <input type="hidden" name="pass" value="{$pass}">
                                        <input type="hidden" name="form" value={$form}>
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
                                        <input type="hidden" name="name" value={$name}>
                                        <input type="hidden" name="form" value={$form}>
                                        <input type="hidden" name="filePath" value={$filePath}>
                                        <input type="hidden" name="sqltable" value={$sqltable}>
                                        <input type="hidden" name="namb" value="{$pagenow}">
                                        <input type="hidden" name="pgnam" value="{$pagenam}">
                                        <input type="hidden" name="sort" value="{$sortnow}">
                                        <input type="hidden" name="sort2" value="{$sortnow2}">                                 
                                        <input  type="submit"class = "btn btn-lg btn-success rounded-0" value="アップロード">                                                       
                                        </form></th>
                                        <th></th>
                                     </tr>  
                            </table>
                            
                        </div>  
                          {$msg}
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
                                                <option value={$sortnow}>{$default1}</option>
                                                {$sortname}
                                                <option value="name">ファイル名順</option>	
                                                <option value="type">種類順</option>	
                                                <option value="size">サイズ順</option>	
                                                <option value="date">アップロード日順</option>	
                                            </select>
                                            <select  name="sort2"class="bg-dark text-white"style="--bs-bg-opacity: .7;">
                                                {$SORTAD}
                                                {$SORTDA}
                                            </select>　
                                                <input type="hidden" name="name" value={$name}>
                                                <input type="hidden" name="id" value={$id}>
                                                <input type="hidden" name="pass" value={$pass}>
                                                <input type="hidden" name="nam" value={$nam}>
                                                <input type="hidden" name="form" value={$form}>
      
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
                                    <input type="hidden" name="name" value={$name}>
                                        <input type="hidden" name="id" value={$id}>
                                        <input type="hidden" name="pass" value={$pass}>
                                        <input type="hidden" name="form" value={$form}>
                                        <input type="hidden" name="filePath" value={$filePath}>
                                        <input type="hidden" name="sqltable" value={$sqltable}>         
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
                                
                                            <th scope="col-1"style="text-align:center"><input type="button"id="btn"class="btn btn-m btn-primary rounded-0"{$allcheck} value="全選択" onclick="checkAll()"></th>                                            
                                            <th scope="col-3"style="text-align:center"><h5>ファイル名</h5></th>
                                            <th scope="col-1"style="text-align:center"><h5>種類</h5></th>
                                            <th scope="col-2"style="text-align:center"><h5>サイズ</h5></th>
                                            <th scope="col-3"style="text-align:center"><h5>アップロード日</h5></th>
                                            <th scope="col-1"style="text-align:center"><h5>ダウンロード</h5></th>
                                            <th scope="col-1"style="text-align:center"><h5>削除</h5></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                                        
                                <script>
                                    if(!document.referrer) location.href="http://localhost/ファイル共有/.php/main.php";
                                    </script>
                                </body>
{else}
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
            <div class="col-2"><h4>ようこそ{$name2}様</h4></div>
            <div class="col-3">
                <div style="text-align:center" onclick="obj=document.getElementById('menu1').style; obj.display=(obj.display=='none')?'block':'none';">
                    <a style="cursor:pointer;"><button type="button" class="shadow-lg btn btn-dark rounded-0 btn-lg ">アカウントメニュー</button></a>                   
                    <!--// 折りたたみ展開ボタン -->
                    
                    <!-- ここから先を折りたたむ -->
                    <div id="menu1" style="display:none;clear:both;">
                    <form action="index_passch.php" style="text-align:center" method="POST">
                        <input type="hidden" name="name" value="{$name}">
                        <input type="hidden" name="pass" value="{$pass}">
                        <input type="hidden" name="nam" value="{$nam}">
                        <input type="hidden" name="form" value={$form}>
                        <input type="submit"  class="btn btn-success btn-lg shadow rounded-0" value="  パスワード変更 ">
                    </form>
                    <form action="index_delete.php" style="text-align:center"method="POST">
                        <input type="hidden" name="name" value="{$name}">
                        <input type="hidden" name="id" value="{$id}">
                        <input type="hidden" name="pass" value="{$pass}">
                        <input type="hidden" name="form" value={$form}>
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
                                <input type="hidden" name="name" value={$name}>
                                <input type="hidden" name="form" value={$form}>
                                <input type="hidden" name="filePath" value={$filePath}>
                                <input type="hidden" name="sqltable" value={$sqltable}>
                                <input type="hidden" name="namb" value="{$pagenow}">
                                <input type="hidden" name="pgnam" value="{$pagenam}">
                                <input type="hidden" name="sort" value="{$sortnow}">
                                <input type="hidden" name="sort2" value="{$sortnow2}">                                     
                                <input  type="submit"class = "btn btn-lg btn-success rounded-0" value="アップロード">                                                      
                            </form></th>
                            <th></th>
                         </tr>  
                </table>
                
            </div>  
              {$msg}
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
                                                <option value={$sortnow}>{$default1}</option>
                                                {$sortname}
                                                <option value="name">ファイル名順</option>	
                                                <option value="type">種類順</option>	
                                                <option value="size">サイズ順</option>
                                                <option value="username">アップロード者</option>		
                                                <option value="date">アップロード日順</option>	
                                            </select>
                                            <select  name="sort2"class="bg-light"style="--bs-bg-opacity: .8;">
                                                {$SORTAD}
                                                {$SORTDA}
                                            </select>　
                                                <input type="hidden" name="name" value={$name}>
                                                <input type="hidden" name="id" value={$id}>
                                                <input type="hidden" name="pass" value={$pass}>
                                                <input type="hidden" name="nam" value={$nam}>
                                                <input type="hidden" name="form" value={$form}>
      
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
                                                <input type="hidden" name="name" value={$name}>
                                                    <input type="hidden" name="id" value={$id}>
                                                    <input type="hidden" name="pass" value={$pass}>
                                                    <input type="hidden" name="form" value={$form}>
                                                    <input type="hidden" name="filePath" value={$filePath}>
                                                    <input type="hidden" name="sqltable" value={$sqltable}>              
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
                                        <th scope="col-1"style="text-align:center"><input type="button"id="btn"class="btn btn-m btn-primary rounded-0"{$allcheck} value="全選択" onclick="checkAll()"></th>                                                    
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
                                                                                
                                        <script>
                                            if(!document.referrer) location.href="http://localhost/ファイル共有/.php/main.php";
                                            </script>
                                        </body>
{/if}