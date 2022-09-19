<?php
try {
$db = new PDO('mysql:host=localhost;dbname=di.blog;charset=utf8', 'root', '');
$stt = $db->prepare('SELECT * FROM account order by id desc');
$stt->execute();
} catch(PDOException $e) {
die('Error:'.$e->getMessage());
}
?>
<?php /*
print($_POST['email']);
print($_POST['password']); */
?>
 
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント一覧画面</title>
        <link rel="stylesheet" type="text/css" href="di2.css">
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
            <h1>アカウント一覧画面</h1> 
            
            <table border='1'>
            <tr><td>ID</td><td>名前(姓)</td><td>名前(名)</td><td>カナ(姓)</td><td>カナ(名)</td><td>メールアドレス</td><td>性別</td><td>アカウント権限</td><td>削除フラグ</td><td>登録日時</td><td>更新日時</td><td colspan="2">操作</td></tr>
            
            <?php while ($row = $stt->fetch()) { ?>
            
            <tr> 
                <td><?=$row['id']?></td>
                <td><?php print($row['family_name']); ?></td>
                <td><?php print($row['last_name']); ?></td>
                <td><?php print($row['family_name_kana']); ?></td>
                <td><?php print($row['last_name_kana']); ?></td>
                <td><?php print($row['mail']); ?></td>
                <td><?php
                        if($row['gender']==0){
                            echo "男";
                        }else{
                            echo "女";
                        }
                    ?>
                </td>
                <td><?php
                        if($row['authority']==0){
                            echo "一般";
                        }else{
                            echo "管理者";
                        }
                        ?>
                </td>
                <td><?php
                        if($row['delete_flag']==0){
                            echo "有効";
                        }else{
                            echo "無効";
                        }
                    ?>
                </td>
                <td><?php
                            $ts=strtotime($row['registered_time']);
                            echo date('Y/m/d',$ts);
                            ?></td>
                <td><?php
                            $ts=strtotime($row['registered_time']);
                            echo date('Y/m/d',$ts);
                            ?></td>
                <td>
                    <form action="update.php" method="post">
                    <input type="submit" value="変更する">
                    <input type="hidden" name="id" value="<?=$row['id']?>">
                    </form>
                </td>
                <td>
                    <form action="delete.php" method="post">
                    <input type="submit" value="削除">
                    <input type="hidden" name="id" value="<?=$row['id']?>">
                    </form>
                </td>
            </tr>
            
            <?php } ?>

            </table>
        </main>
        <footer>
            Copyright D.I.works| D.I.blog is the one which provides A to Z about programming
       </footer>    
</body>
</html>