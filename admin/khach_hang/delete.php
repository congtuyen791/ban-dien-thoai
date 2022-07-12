<?php

require_once "./../../dao/khach_hang.php";
$ma_kh = intval($_GET['ma_kh']);

deleteById_kh($ma_kh);

header("location: /ass_duanmau/admin/khach_hang/index.php");


?>