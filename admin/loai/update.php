<?php
require_once "./../../dao/khach_hang.php";

session_start();

$data= [
    'ma_loai' => $_POST['ma_loai'],
    'ten_loai' => $_POST['ten_loai'],
    'bieu_tuong' => $_POST['bieu_tuong'],
];


if (
    empty($data['ma_loai']) == true || 
    empty($data['ten_loai']) == true || 
    empty($data['bieu_tuong']) == true 
) {
    $error = "Không được để trống";

    $_SESSION['error'] = $error;

    header("location: /ass_duanmau/admin/loai/edit.php?ma_kh=" . $data['ma_loai'] );
    die;
}
// var_dump($data);die;
update($data);


header("location: /ass_duanmau/admin/loai/index.php");


