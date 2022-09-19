<?php
try {
$db = new PDO('mysql:host=localhost;dbname=di.blog;charset=utf8', 'root', '');
$stt = $db->prepare('SELECT * FROM `account` WHERE id = :id');
$stt->bindValue(':id', $_POST['id']);
$stt->execute();
} catch(PDOException $e) {
die('Error:'.$e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント削除確認画面</title>
        <link rel="stylesheet" type="text/css" href="delete_confirm.css">
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
            <h1>アカウント削除確認画面</h1>


            <?php
            echo '<p style="font-size:50px;text-align:center;">本当に削除してよろしいですか？</p>';
            ?>

            <form action="delete.php">
                    <input type="button" class="button1" onclick="history.back()"   value="前に戻る" name = "h" style="margin-left: 600px;">
                </form>
                
                <form action="delete_complete.php" method="post" name="r">
                    <input type="submit" class="button2" value="削除する" name="l" style="margin-left: 600px;">
                    
                    <input type="hidden" value="<?php print($_POST['id'])?>" name="id">
                    <input type="hidden" value="<?php print($row['family_name'])?>" name="last">
                    <input type="hidden" value="<?php print($row['last_name']); ?>" name="first">
                    <input type="hidden" value="<?php print($row['family_name_kana']); ?>" name="kanala">
                    <input type="hidden" value="<?php print($row['last_name_kana']); ?>" name="kanafi">
                    <input type="hidden" value="<?php print($row['mail']); ?>" name="mail">
                    <input type="hidden" value="<?php echo password_hash($row['password'],PASSWORD_DEFAULT);?>" name="pass">
                    <input type="hidden" value="<?php 
                    if($row['gender']=="女"){
                        echo 1;
                    }?>" name="man">
                    <input type="hidden" value="<?php echo $row['postal_code'];?>" name="postcode">
                    <input type="hidden" value="<?php echo $row['prefecture'];?>" name="address">
                    <input type="hidden" value="<?php echo $row['address_1'];?>" name="municipalities">
                    <input type="hidden" value="<?php echo $row['address_2'];?>" name="banti">
                    <input type="hidden" value="<?php 
                    if($row['authority']=="管理者"){
                        echo 1;
                    }?>" name="authority">
                    <input type="hidden" value="<?php
                    echo 1;
                    ?>"name="a">
                </form>
         </main>

         <footer>
            Copyright D.I.works| D.I.blog is the one which provides A to Z about programming
       </footer>
</html>