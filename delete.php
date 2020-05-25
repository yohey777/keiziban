<?php include("head.html"); ?>
<body>
<?php include("header.html"); ?>

<main>
<h2>Practice</h2>
<pre>
    <?php
    require('dbconnect.php');

    if (isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])) {
        $id = $_REQUEST['id'];

        $statement = $db->prepare('DELETE FROM memos WHERE id=?');
        $statement->execute(array($id));
    }
?>
メモを削除しました
</pre>
<p><a href="index.php">戻る</a></p>
</main>
</body>    
</html>