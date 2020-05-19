<?php include("head.html"); ?>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

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