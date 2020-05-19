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