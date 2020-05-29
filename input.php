<?php include("head.html"); ?>
<body>
<?php include("header.html"); ?>
<main class="post">

<h2>投稿ページ</h2>

<form action="input_do.php" method="post">
    <input class="post__name" name="name" type="text" placeholder="名前を入力">
    <textarea name="memo" cols="50" rows="10" placeholder="自由にメモを残してください"></textarea><br>
    <button type="submit">登録する</button>
</form>
<span class="note">※一度投稿したら削除できないので、気をつけてください。</span>
</main>
</body>    
</html>