<?php
$str = "210.221.12.10";

$str_md5 = substr(md5($str), 0, 30);
$date_md5 = substr(md5(date("Y-m-d")), 0, 20);
$key_md5 = substr(md5("samplekey"), 0, 10);

$id_md5 = md5($str_md5 . $date_md5 . $key_md5);
$id = substr(base64_encode($id_md5), 0, 8);

echo $id;


?>