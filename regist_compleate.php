<DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント登録完了画面</title>
        <link rel="stylesheet" type="text/css" href="di4.css">
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
            <h1>アカウント登録完了画面</h1>
            <?php
            mb_internal_encoding("utf8");
                try{

                    $pdo = new PDO("mysql:dbname=di.blog;host=localhost;" ,"root" ,"");
                    $pdo ->exec("insert into account(family_name,last_name,family_name_kana,last_name_kana,mail,password,gender,postal_code,prefecture,"
                    ."address_1,address_2,authority,delete_flag)"
                    ."values('".$_POST['last']."','".$_POST['first']."','".$_POST['kanala']."','".$_POST['kanafi']."','".$_POST['mail']."','".$_POST['pass']."','".$_POST['man']."','".$_POST['postcode']."','".$_POST['address']."','".$_POST['municipalities']."','".$_POST['banti']."','".$_POST['authority']."','".$_POST['a']."');");
                    echo '<p style="font-size:50px;text-align:center;">登録完了しました。</p>';
                    $db=null;
                    } catch(PDOException $e){
                        echo '<p style="font-size:50px;text-align:center;color:red;">エラーが発生したためアカウント登録できません</p>';
                   }
           ?>
            <input type="button" onclick="location.href='./di.html'" value="TOPページに戻る">

       </main>

       <footer>
            Copyright D.I.works| D.I.blog is the one which provides A to Z about programming
       </footer>
    </body>
</html>
