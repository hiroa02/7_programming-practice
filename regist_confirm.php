<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント登録画面</title>
        <link rel="stylesheet" type="text/css" href="di3.css">
    </head>

    <body>
       <p><img src="diblog_logo.jpg"></p>
       <header>
            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>D.IBlogについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
                <li><a href="regist.php">アカウント登録</a></li>
            </ul>
       </header>

       <main>
            <h1>アカウント登録確認画面</h1>

            <div class="aka">
                <label>名前(姓)</label>
                <p1><?php echo $_POST['last'];?></p1><br>

                <label>名前(名)</label>
                <p1><?php echo $_POST['first'];?></p1><br>

                <label>カナ(姓)</label>
                <p1><?php echo $_POST['kanala'];?></p1><br>

                <label>カナ(名)</label>
                <p1><?php echo $_POST['kanafi'];?></p1><br>

                <label>メールアドレス</label>
                <p1><?php echo $_POST['mail'];?></p1><br>

                <label>パスワード</label>
                <p1><?php echo $_POST['pass'];?></p1><br>

                <label>性別</label>
                <p1><?php echo $_POST['man'];?></p1><br>

                <label>郵便番号</label>
                <p1><?php echo $_POST['postcode'];?></p1><br>

                <label>住所(都道府県)</label>
                <p1><?php echo $_POST['address'];?></p1><br>

                <label>住所(市区町村)</label>
                <p1><?php echo $_POST['municipalities'];?></p1><br>

                <label>住所(番地)</label>
                <p1><?php echo $_POST['banti'];?></p1><br>

                <label>アカウント権限</label>
                <p1><?php echo $_POST['authority'];?></p1><br>

                <form action="di2.html">
                    <input type="button" class="button1" onclick="history.back()" value="戻って修正する">
                </form>
                
                <form action="regist_compleate.php" method="post">
                    <input type="submit" class="button2" value="登録する">
                    <input type="hidden" value="<?php echo $_POST['last'];?>" name="last">
                    <input type="hidden" value="<?php echo $_POST['first'];?>" name="first">
                    <input type="hidden" value="<?php echo $_POST['kanala'];?>" name="kanala">
                    <input type="hidden" value="<?php echo $_POST['kanafi'];?>" name="kanafi">
                    <input type="hidden" value="<?php echo $_POST['mail'];?>" name="mail">
                    <input type="hidden" value="<?php echo password_hash($_POST['pass'],PASSWORD_DEFAULT);?>" name="pass">
                    <input type="hidden" value="<?php 
                    if($_POST['man']=="女"){
                        echo 1;
                    }?>" name="man">
                    <input type="hidden" value="<?php echo $_POST['postcode'];?>" name="postcode">
                    <input type="hidden" value="<?php echo $_POST['address'];?>" name="address">
                    <input type="hidden" value="<?php echo $_POST['municipalities'];?>" name="municipalities">
                    <input type="hidden" value="<?php echo $_POST['banti'];?>" name="banti">
                    <input type="hidden" value="<?php 
                    if($_POST['authority']=="管理者"){
                        echo 1;
                    }?>" name="authority">
                    <input type="hidden" value="<?php
                    if($_POST['last']==""||$_POST['first']==""||$_POST['kanala']==""||$_POST['kanafi']==""||$_POST['mail']==""
                    ||$_POST['pass']==""||$_POST['man']==""||$_POST['postcode']==""||$_POST['address']==""||$_POST['municipalities']==""
                    ||$_POST['banti']==""||$_POST['authority']==""){
                        echo 1;
                    }
                    ?>"name="a">
                </form>
            </div>
       </main>

       <footer>
            Copyright D.I.works| D.I.blog is the one which provides A to Z about programming
       </footer>

    </body>
</html>