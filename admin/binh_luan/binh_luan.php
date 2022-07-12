<?php
require_once "./../../dao/binh_luan.php";
session_start();

if (isset($_POST['gui'])) {
    $ma_hh = $_POST['ma_hh'];
    $noi_dung = $_POST['binh_luan'];
    $ma_kh = $_SESSION['user']['ma_kh'];
    binh_luan_insert($noi_dung, $ma_kh, $ma_hh);
    header("location: /ass_duanmau/site/chi_tiet_sp.php?ma_hh=".$ma_hh);
}