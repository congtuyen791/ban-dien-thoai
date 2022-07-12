<?php

require_once "./../../dao/loai.php";
$ma_loai = intval($_GET['ma_loai']);

deleteById($ma_loai);

header("location: /ass_duanmau/admin/loai/index.php");


?>