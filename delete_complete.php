<DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント削除完了画面</title>
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
                <li><a href="list.php">アカウント一覧画面</a></li>
            </ul>
       </header>

       <main>
            <h1>アカウント削除完了画面</h1>
            <?php
            // mb_internal_encoding("utf8");
            // try {
            //     $db = new PDO('mysql:host=localhost;dbname=di.blog;charset=utf8', 'root', '');
            //     $stt = $db->prepare('DELETE FROM `account` WHERE id = :id');
            //     $stt->bindValue(':id', $_POST['id']);
            //     $stt->execute();
            //     echo '<p style="font-size:50px;text-align:center;">削除完了しました。</p>';
            //     } catch(PDOException $e) {
            //         echo '<p style="font-size:50px;text-align:center;color:red;">エラーが発生したため削除できません</p>';
            //     }

                mb_internal_encoding("utf8");
                    try {
                        $db = new PDO('mysql:host=localhost;dbname=di.blog;charset=utf8', 'root', '');
                        $stmt = $db->prepare('UPDATE account SET delete_flag=:delete_flag,registered_time=:registered_time,update_time=:update_time WHERE id = :id');
                        $stmt->bindValue(':id',$_POST['id']);
                       
                        $stmt->bindValue(':delete_flag',$_POST['a']);
                        $today=new DateTime("now");
                        $stmt->bindValue(':registered_time',$today->format('Y/m/d'));
                        $stmt->bindValue(':update_time',$today->format('Y/m/d'));
                        $stmt->execute();
                        echo '<p style="font-size:50px;text-align:center;">削除完了しました。</p>';
                        } catch(PDOException $e) {
                            echo '<p style="font-size:50px;text-align:center;color:red;">エラーが発生したため削除できません</p>';
                        }
               
           ?>
            <input type="button" onclick="location.href='./di.html'" value="TOPページに戻る">

       </main>

       <footer>
            Copyright D.I.works| D.I.blog is the one which provides A to Z about programming
       </footer>
    </body>
</html>
