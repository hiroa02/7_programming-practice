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
       <?php
        try{
            $pdo = new PDO(
                'mysql:host=localhost;dbname=di.blog;charset=utf8',
                'root',
                ''
            );
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        }catch(PDOException $Exception){
            die('接続エラー：' .$Exception->getMessage());
        }
        try{
            $sql = "SELECT * FROM account order by id desc";
            $stmh = $pdo->prepare($sql);
            $stmh->execute();
        }catch(PDOException $Exception){
            die('接続エラー：' .$Exception->getMessage());
        }
        ?>
        <table border="1"><tbody>
        <tr><th>ID</th><th>名前(姓)</th><th>名前(名)</th><th>カナ(姓)</th><th>カナ(名)</th><th>メールアドレス</th><th>性別</th><th>アカウント権限</th><th>削除フラグ</th><th>登録日時</th><th>更新日時</th><th colspan="2">操作</th></tr>
        <?php
            while($row = $stmh->fetch(PDO::FETCH_ASSOC)){
        ?>
            <tr>
                <th><?=htmlspecialchars($row['id'])?></th>
                <th><?=htmlspecialchars($row['family_name'])?></th>
                <th><?=htmlspecialchars($row['last_name'])?></th>
                <th><?=htmlspecialchars($row['family_name_kana'])?></th>
                <th><?=htmlspecialchars($row['last_name_kana'])?></th>
                <th><?=htmlspecialchars($row['mail'])?></th>
                <th><?php
                if($row['gender']==0){
                    echo "男";
                }else{
                    echo "女";
                }
                ?></th>
                <th><?php
                if($row['authority']==0){
                    echo "一般";
                }else{
                    echo "管理者";
                }
                ?></th>
                <th><?php
                if($row['delete_flag']==0){
                    echo "有効";
                }else{
                    echo "無効";
                }
                ?></th>
                <th><?php
                $ts=strtotime($row['registered_time']);
                echo date('Y/m/d',$ts);
                ?></th>
                <th><?php
                $ts=strtotime($row['update_time']);
                echo date('Y/m/d',$ts);
                ?></th>
                <th><a href="update.php"><input type="submit" value="更新する"></a></th>
                <th><a href="delete.php"><input type="submit" value="削除"></a></th>
            </tr>
        <?php
            }
            $pdo = null;
        ?>
        </tbody></table>
       </main>
       
       <footer>
            Copyright D.I.works| D.I.blog is the one which provides A to Z about programming
       </footer>
</body>
</html>   
