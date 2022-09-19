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
        <title>アカウント削除画面</title>
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
                <li><a href="list.php">アカウント一覧画面</a></li>
            </ul>
       </header>

       <main>
            <h1>アカウント削除画面</h1>
			<?php while ($row = $stt->fetch()) { ?>

            <div class="aka">
                <label>名前(姓)</label>
                <p1><?php print($row['family_name'])?></p1><br>

                <label>名前(名)</label>
                <p1></p1><?php print($row['last_name']); ?><br>

                <label>カナ(姓)</label>
                <p1></p1><?php print($row['family_name_kana']); ?><br>

                <label>カナ(名)</label>
                <p1></p1><?php print($row['last_name_kana']); ?><br>

                <label>メールアドレス</label>
                <p1><?php print($row['mail']); ?></p1><br>

                <label>パスワード</label>
                <p1><?php echo str_repeat("●",mb_strlen($row['password'],"UTF8"));?></p1><br>

                <label>性別</label>
                <p1><?php  
                if($row['gender']==0){
                    echo "男";
                }else{
                    echo "女";
                }?></p1><br>

                <label>郵便番号</label>
                <p1><?php echo $row['postal_code'];?></p1><br>

                <label>住所(都道府県)</label>
                <p1><?php echo $row['prefecture'];?></p1><br>

                <label>住所(市区町村)</label>
                <p1><?php echo $row['address_1'];?></p1><br>

                <label>住所(番地)</label>
                <p1><?php echo $row['address_2'];?></p1><br>

                <label>アカウント権限</label>
                <p1><?php 
                if($row['authority']==0){
                    echo "一般";
                }else{
                    echo "管理者";
                }?></p1><br>

                
                <form action="delete_confirm.php" method="post">
                    <input type="submit" class="button2" value="確認する">
                    <input type="hidden" value="<?php print($row['id'])?>" name="id">
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
                    if($row['id']==""||$row['family_name']==""||$row['last_name']==""||$row['family_name_kana']==""||$row['last_name_kana']==""||$row['mail']==""
                    ||$row['password']==""||$row['gender']==""||$row['postal_code']==""||$row['prefecture']==""||$row['address_1']==""
                    ||$row['address_2']==""||$row['authority']==""){
                        echo 1;
                    }
                    ?>"name="a">
                </form>
            </div>
			<?php } ?>
       </main>

       <footer>
            Copyright D.I.works| D.I.blog is the one which provides A to Z about programming
       </footer>

    </body>
</html>