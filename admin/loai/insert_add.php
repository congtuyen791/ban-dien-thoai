<?php

session_start();


require_once "./../../dao/loai.php";
//nhập dữ liệu  và lưu
$data = [
    'ten_loai' => $_POST['ten_loai'],
];
$fileUpload = $_FILES['bieu_tuong'];
if (strpos($fileUpload["type"], 'image') === false) {
    $_SESSION['error'] = "bieu tuong phải là ảnh";

    header("location: /ass_duanmau/admin/loai/insert.php");
    die;
}
$storePath = './../../images/';
$filename = $fileUpload['name'];
$path = $storePath . $filename;
move_uploaded_file($fileUpload['tmp_name'], $path);
$data['bieu_tuong'] = '/ass_duanmau/images/' . $filename;

insert($data);


header("location: /ass_duanmau/admin/loai/index.php");

