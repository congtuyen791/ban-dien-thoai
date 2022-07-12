<?php
require_once "./../../dao/hang_hoa.php";

session_start();

$data= [
    'ten_hh' => $_POST['ten_hh'],
    'gia' => $_POST['gia'],
    'giam_gia' => $_POST['giam_gia'],
    'mo_ta' => $_POST['mo_ta'],
    'dac_biet' => $_POST['dac_biet'],
    'ma_loai' => $_POST['ma_loai'],
    'luot_xem' => $_POST['luot_xem'],
    'ngay_tao' => $_POST['ngay_tao'],
    'ngay_sua' => $_POST['ngay_sua'],
];
// var_dump($data);die;

$fileUpload = $_FILES['hinh'];
if (strpos($fileUpload["type"], 'image') === false) {
    $_SESSION['error'] = "file tải lên phải là ảnh";

    header("location: /ass_duanmau/admin/hang_hoa/insert.php");
    die;
}
$storePath = './../../images/';
$filename = $fileUpload['name'];
$path = $storePath . $filename;
move_uploaded_file($fileUpload['tmp_name'], $path);
$data['hinh'] = '/ass_duanmau/images/' . $filename;
// if (
//     empty($data['ten_hh']) == true || 
//     empty($data['gia']) == true || 
//     empty($data['giam_gia']) == true || 
//     empty($data['mo_ta']) == true || 
//     empty($data['dac_biet']) == true ||
//     empty($data['ma_loai']) == true ||
//     empty($data['luot_xem']) == true 
// ) {
//     $error = "Không được để trống";

//     $_SESSION['error'] = $error;

//     header("location: /ass_duanmau/admin/hang_hoa/insert.php");
//     die;
// }

insert_hh($data);


header("location: /ass_duanmau/admin/hang_hoa/index.php");

