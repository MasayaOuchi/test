<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>4eachblog　掲示板</title>
<link rel="stylesheet" type="text/css"href="style.css">
</head>
    
<body>
    
<?php
    
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson2;host=localhost;","root","mysql");
$stmt = $pdo->query("select * from 4each_keijiban");

?>

    
<img src="4eachblog_logo.jpg">

<header>
    <div class="head">
        <ul>
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
        </ul>
    </div>
</header>

<main>
    

    <div class="title">
        <h1>プログラミングに役立つ教材</h1>
    </div>
    
    
<div class="nyuuryoku">
    
    <h2>入力フォーム</h2>
    <form method="post" action="insert.php">
       <div>
        <label>名前</label>
        <br>
           <input type="text" class="text"size="35"name="handlename">
       </div>
        
        <div>
         <label>タイトル</label>
         <br>
         <input type="text" class="text" size="35" name="title">
        </div>
        
        <div>
         <label>コメント</label>
         <br>
         <textarea cols="35" rows="7" name="comments"></textarea>
        </div>
        
        <div>
         <input type="submit" class="submit" value="送信する">
        </div>
        
    </form>
</div>
    <br>

    <?php
    
    while($row = $stmt->fetch()){
    
    echo"<div class='kiji1'>";
    echo"<h3>".$row['title']."</h3>";
    
//    echo"<div class='B'>";
    echo $row['comments'];
    echo"<div class='handlename'>posted by ".$row['handlename']."</div>";
    
    
    echo"</div>";
    echo"<br>";}
    
    ?>


    
    <br>
    <br>

</main>
    
<sub>
    <div class="ninki">
    <h2>人気の記事</h2>
    <ul>
        <li>PHPのオススメ本</li>
        <li>PHP　Myadminの使い方</li>
        <li>今人気のエディタtop5</li>
        <li>HTMLの基礎</li></ul>
    </div>
    
    <div class="osusume">
    <h2>人気の記事</h2>
    <ul>
        <li>インターノウス株式会社</li>
        <li>XAMPPのダウンロード</li>
        <li>Eclipsのダウンロード</li>
        <li>Bracketのダウンロード</li>
    </ul>
    </div>
    
    <div class="kategori">
    <h2>カテゴリ</h2>
    <ul>
        <li>HTML</li>
        <li>PHP</li>
        <li>MySQL</li>
        <li>Javascript</li>
    </ul>
    </div>
</sub>
    
<footer><div>copylight internous | 4each blog is the one which provoides A to Z about programing</div></footer>
    

    
</body></html>