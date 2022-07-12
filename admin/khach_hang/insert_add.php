<?php

session_start();


require_once "./../../dao/khach_hang.php";
//nhập dữ liệu  và lưu
$data = [
    'ten_tk' => $_POST['ten_tk'],
    'mat_khau' => $_POST['mat_khau'],
    'ho_ten' => $_POST['ho_ten'],
    'email' => $_POST['email'],
    'gioi_tinh' => $_POST['gioi_tinh'],
    'dia_chi' => $_POST['dia_chi'],
    'vai_tro' => $_POST['vai_tro'],
    'kich_hoat' => $_POST['kich_hoat'],
];
$fileUpload = $_FILES['hinh'];
if (strpos($fileUpload["type"], 'image') === false) {
    $_SESSION['error'] = "file tải lên phải là ảnh";

    header("location: /ass_duanmau/admin/khach_hang/insert.php");
    die;
}
$storePath = './../../images/';
$filename = $fileUpload['name'];
$path = $storePath . $filename;
move_uploaded_file($fileUpload['tmp_name'], $path);
$data['hinh'] = '/ass_duanmau/images/' . $filename;
// if (
//     empty($data['ten_tk']) == true || 
//     empty($data['mat_khau']) == true || 
//     empty($data['ho_ten']) == true || 
//     empty($data['gioi_tinh']) == true || 
//     empty($data['dia_chi']) == true || 
//     empty($data['vai_tro']) == true || 
//     empty($data['kich_hoat']) == true 
// ) {
//     $error = "Không được để trống";

//     $_SESSION['error'] = $error;

//     header("location: /ass_duanmau/admin/khach_hang/insert.php");
//     die;
// }
insert_kh($data);


header("location: /ass_duanmau/admin/khach_hang/index.php");

