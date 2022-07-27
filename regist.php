<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント登録画面</title>
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
            </ul>
       </header>

       <main>
            <h1>アカウント登録画面</h1>

            <form method="post" name="form" action="regist_confirm.php">
                <div>
                    <label>名前(姓)</label>
                    <input type="text" size="35" maxlength="10" name="last"  value="" pattern="[\u4E00-\u9FFF\u3040-\u309F-]*">
                </div>
                <div id="a"></div>

                <div>
                    <label>名前(名)</label>
                    <input type="text" size="35" maxlength="10" name="first"  value="" pattern="[\u4E00-\u9FFF\u3040-\u309F-]*">
                </div>
                <div id="b"></div>

                <div>
                    <label>カナ(姓)</label>
                    <input type="text" size="35" maxlength="10" name="kanala"  value="" pattern="[\u30A1-\u30F6]*">
                </div>
                <div id="c"></div>

                <div>
                    <label>カナ(名)</label>
                    <input type="text" size="35" maxlength="10" name="kanafi"  value="" pattern="[\u30A1-\u30F6]*">
                </div>
                <div id="d"></div>

                <div>
                    <label>メールアドレス</label>
                    <input type="email" size="35" maxlength="100" name="mail"  pattern="^[a-zA-Z0-9.!#$&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)+$">
                </div>
                <div id="e"></div>

                <div>
                    <label>パスワード</label>
                    <input type="password" size="35" maxlength="10" name="pass"  pattern="^[a-zA-Z0-9]+$">
                </div>
                <div id="f"></div>

                <div>
                    <label>性別</label>
                    <input type="radio" name="man"  value="男">男
                    <input type="radio" name="man" value="女">女
                </div>
                <div id="g"></div>

                <div>
                    <label>郵便番号</label>
                    <input type="text" size="35" maxlength="7" name="postcode"  value="" pattern="^[0-9]+$">
                </div>
                <div id="h"></div>

                <div>
                    <label>住所(都道府県)</label>
                    <select name="address" >
                        <option value=""></option>
                        <option value="北海道">北海道</option><option value="青森">青森</option><option value="岩手">岩手</option><option value="宮城">宮城</option>
                        <option value="秋田">秋田</option><option value="山形">山形</option><option value="福島">福島</option><option value="茨城">茨城</option>
                        <option value="栃木">栃木</option><option value="群馬">群馬</option><option value="埼玉">埼玉</option><option value="千葉">千葉</option>
                        <option value="東京">東京</option><option value="神奈川">神奈川</option><option value="新潟">新潟</option><option value="富山">富山</option>
                        <option value="石川">石川</option><option value="福井">福井</option><option value="山梨">山梨</option><option value="長野">長野</option>
                        <option value="岐阜">岐阜</option><option value="静岡">静岡</option><option value="愛知">愛知</option><option value="三重">三重</option>
                        <option value="滋賀">滋賀</option><option value="京都">京都</option><option value="大阪">大阪</option><option value="兵庫">兵庫</option>
                        <option value="奈良">奈良</option><option value="和歌山">和歌山</option><option value="鳥取">鳥取</option><option value="島根">島根</option>
                        <option value="岡山">岡山</option><option value="広島">広島</option><option value="山口">山口</option><option value="徳島">徳島</option>
                        <option value="香川">香川</option><option value="愛媛">愛媛</option><option value="高知">高知</option><option value="福岡">福岡</option>
                        <option value="佐賀">佐賀</option><option value="長崎">長崎</option><option value="熊本">熊本</option><option value="大分">大分</option>
                        <option value="宮崎">宮崎</option><option value="鹿児島">鹿児島</option><option value="沖縄">沖縄</option>
                    </select>
                </div>
                <div id="i"></div>

                <div>
                    <label>住所(市区町村)</label>
                    <input type="text" size="35" maxlength="10" name="municipalities" pattern="[-\u4E00-\u9FFF\u3040-\u309F-\uFF66-\uFF9F\u30A1-\u30F60-9 ０-９_\s]*">
                </div>
                <div id="j"></div>

                <div>
                    <label>住所(番地)</label>
                    <input type="text" size="35" maxlength="100" name="banti" pattern="[-\u4E00-\u9FFF\u3040-\u309F-\uFF66-\uFF9F\u30A1-\u30F60-9 ０-９_\s]*">
                </div>
                <div id="k"></div>

                <div>
                    <label>アカウント権限</label>
                    <select name="authority" >
                        <option value="一般" >一般</option>
                        <option value="管理者">管理者</option>
                    </select>
                </div>
                <div id="l"></div>

                <div>
                    <input type="submit" value="確認する" name="a" onclick="return checkForm();" >
                </div>
            </form>

       </main>

       <footer>
            Copyright D.I.works| D.I.blog is the one which provides A to Z about programming
       </footer>

       <script>
            function checkForm() {
                if(document.form.last.value==""){
                    target=document.getElementById("a");
                    target.style.color="red";
                    target.innerHTML="名前(姓)が未入力です";
                }else{
                    target=document.getElementById("a");
                    target.innerHTML="";

                }
                if(document.form.first.value==""){
                    target=document.getElementById("b");
                    target.style.color="red";
                    target.innerHTML="名前(名)が未入力です";
                }else{
                    target=document.getElementById("b");
                    target.innerHTML="";
                }
                if(document.form.kanala.value==""){
                    target=document.getElementById("c");
                    target.style.color="red";
                    target.innerHTML="カナ(姓)が未入力です";
                }else{
                    target=document.getElementById("c");
                    target.innerHTML="";
                }
                if(document.form.kanafi.value==""){
                    target=document.getElementById("d");
                    target.style.color="red";
                    target.innerHTML="カナ(名)が未入力です";
                }else{
                    target=document.getElementById("d");
                    target.innerHTML="";
                }
                if(document.form.mail.value==""){
                    target=document.getElementById("e");
                    target.style.color="red";
                    target.innerHTML="メールアドレスが未入力です";
                }else{
                    target=document.getElementById("e");
                    target.innerHTML="";
                }
                if(document.form.pass.value==""){
                    target=document.getElementById("f");
                    target.style.color="red";
                    target.innerHTML="パスワードが未入力です";
                }else{
                    target=document.getElementById("f");
                    target.innerHTML="";
                }
                if(document.form.man.value==""){
                    target=document.getElementById("g");
                    target.style.color="red";
                    target.innerHTML="性別が未入力です";
                }else{
                    target=document.getElementById("g");
                    target.innerHTML="";
                }
                if(document.form.postcode.value==""){
                    target=document.getElementById("h");
                    target.style.color="red";
                    target.innerHTML="郵便番号が未入力です";
                }else{
                    target=document.getElementById("h");
                    target.innerHTML="";
                }
                if(document.form.address.value==""){
                    target=document.getElementById("i");
                    target.style.color="red";
                    target.innerHTML="住所(都道府県)が未入力です。";
                }else{
                    target=document.getElementById("i");
                    target.innerHTML="";
                }
                if(document.form.municipalities.value==""){
                    target=document.getElementById("j");
                    target.style.color="red";
                    target.innerHTML="住所が(市区町村)未入力です。";
                }else{
                    target=document.getElementById("j");
                    target.innerHTML="";
                }
                if(document.form.banti.value==""){
                    target=document.getElementById("k");
                    target.style.color="red";
                    target.innerHTML="住所(番地)が未入力です。";
                }else{
                    target=document.getElementById("k");
                    target.innerHTML="";
                }
                if(document.form.authority.value==""){
                    target=document.getElementById("l");
                    target.style.color="red";
                    target.innerHTML="アカウント権限が未入力です。";
                }else{
                    target=document.getElementById("l");
                    target.innerHTML="";
                }
                if(!(form.last.value==""||form.first.value==""||form.kanala.value==""||form.kanafi.value==""||form.mail.value==""
                ||form.pass.value==""||form.man.value==""||form.postcode.value==""||form.address.value==""||form.municipalities.value==""
                ||form.banti.value==""||form.authority.value=="")){
                    return true;
                }else{
                    return false;
                }    
            }
       </script>
    </body>
</html>