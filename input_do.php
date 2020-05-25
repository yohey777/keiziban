<?php include("head.html"); ?>
<body>
<?php include("header.html"); ?>

<main>
<h2>投稿完了</h2>
<pre>
    <?php
    require('dbconnect.php');

    $statement = $db->prepare('INSERT INTO memos SET memo=?, created_at=NOW()');
    $statement->bindParam(1, $_POST['memo']);
    $statement->execute();
    echo 'メッセージが登録されました';
?>
</pre>
<a href="index.php">戻る</a>
</main>
</body>    
</html>  