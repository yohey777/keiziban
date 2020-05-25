<?php include("head.html"); ?>
<body>
<?php include("header.html"); ?>
<main>
<h2>Practice</h2>
<pre>
    <?php
    require('dbconnect.php');

    $statement = $db->prepare('UPDATE memos SET memo=? WHERE id=?');
    $statement->execute(array($_POST['memo'], $_POST['id']));
?>
メモの内容を変更しました
</pre>
<p><a href="index.php">戻る</a></p>
</main>
</body>    
</html>