<?php include("head.html"); ?>
<?php include("component/makeid.php"); ?>

<body>
<?php include("header.html"); ?>

<main>
<h2>高校サッカー掲示板トップ</h2>
<?php
require('dbconnect.php');

if (isset($_REQUEST['page']) && is_numeric($_REQUEST['page'])) {
    $page = $_REQUEST['page'];
} else {
    $page = 1;
}
$start = 5 * ($page - 1);

$memos = $db->prepare('SELECT * FROM memos ORDER BY id DESC LIMIT ?, 5');
$memos->bindParam(1, $start, PDO::PARAM_INT);
$memos->execute();
?>

<article>
    <?php while ($memo = $memos->fetch()): ?>
      <span><?php print($memo['id']); ?></span>
      <span>名前:<?php print($memo['name']); ?></span>
      <time><?php print($memo['created_at']); ?></time>
      <span>id:<?php print($id); ?></span>
      <p><?php print(mb_substr($memo['memo'], 0, 50)); ?></p>
      <hr>
    <?php endwhile; ?>

    <?php if ($page >= 2): ?>
        <a href="index.php?page=<?php print($page-1); ?>"><?php print($page-1); ?>ページ目へ</a>
    <?php endif; ?>
     | 
    <?php
    $counts = $db->query('SELECT COUNT(*) as cnt FROM memos');
    $count = $counts->fetch();
    $max_page = ceil($count['cnt'] / 5);
    if ($page < $max_page):
    ?>
        <a href="index.php?page=<?php print($page+1); ?>"><?php print($page+1); ?>ページ目へ</a>
    <?php endif; ?>
</article>
  <a class="post__button" href="input.php">投稿ボタン</a>
</main>
</body>
</html>