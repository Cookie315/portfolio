<!DOCTYPE html>
<html>
    <head>
        <meta lang="UTF-8">
        <title>○○様のページ</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/bootstrap.min.css" />
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    </head>
    <body>
        
        <?php
        
        $s = new PDO("mysql:host=localhost;dbname=upload","root","root");
        $N1_p = $_POST["pass"];
        $N1_m = $_POST["name"];
        $deleat = '<form action="file.php" method=GET><input type="submit" value="削除">
                                
        </form>'
       ?>

        <div class="container">
               <div class="container">
            <div class="row">
             
                <div class="col-3"><h1>企業実習用</h1></div>
                <div class="col-5"></div>
                <div class="col-4">
                ようこそ<?php print "$N1_m" ?>様 <a href="otamesi.php">ログアウト</a>
                </div>
                <hr>
           </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                    <div class="card-header"><h3>アップロードするファイル</h3></div>
                    <div class="card-body">
                    <form action="file.php" method="GET">
                     <input type="file" name="upload"accept="image/*" multiple>
                     <input type="text" placeholder="https">
                     <input type="submit"value="アップロード"> 
                    </form>
                </div></div></div>
                <div class="col-3">
                    
                </div>
        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <h1>ファイル</h1>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                            </div>
                            <div class="col-sm-12">
                                <table class="table table-hover table-bordered table-striped">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col">番号</th>
                                            <th scope="col">名前</th>
                                            <th scope="col">ファイル名</th>
                                            <th scope="col">サイズ</th>
                                            <th scope="col">日時</th>
                                            <th scope="col">削除</th>
                                        </tr>
                                    </thead>
                                    <tbody class="">
                        <?php
                        $r = $s -> query("SELECT * FROM file");

                        while($re = $r -> fetch()){
                        print <<< eot
                        
                        <tr class="table">
                                         <th scope="row">$re[0]</th><td>$re[1]</td>
                                            <td>$re[2]</td><td>$re[3]</td><td>$re[4]</td><td>$deleat</td>
                                        </tr>
                        
                        eot;
                        }
                        ?>                 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    
       
        </div>
       
    </body>
</html>