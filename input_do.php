<?php include("head.html"); ?>
<?php include("header.html"); ?>
<body>
<?php include("component/function.php"); ?>

<main>
<h2>投稿完了</h2>
<pre>
    <?php
    require('dbconnect.php');

    $statement = $db->prepare('INSERT INTO memos SET memo=?,name=?, created_at=NOW()');
    $statement->bindParam(1, $_POST['memo']);
    $statement->bindParam(2, $name);
    $statement->execute();
    echo 'メッセージが登録されました';
?>
</pre>
<a href="index.php">戻る</a>
</main>
</body>    
</html>  