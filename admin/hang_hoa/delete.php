<?php

require_once "./../../dao/hang_hoa.php";
$ma_hh = intval($_GET['ma_hh']);

deleteById_hh($ma_hh);

header("location: /ass_duanmau/admin/hang_hoa/index.php");


?>