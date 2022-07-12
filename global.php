<?php
session_start();

//Khai báo các biến toàn cục
$ROOT_URL = "/ass_duanmau";
$ADMIN_URL = $ROOT_URL . "/admin";
$IMAGE_URL = $ROOT_URL . "/images";
$SITE_URL = $ROOT_URL . "/site";

//Đường dẫn tới thư mục upload file
$PATH_IMG = $_SERVER['DOCUMENT_ROOT'] . $ROOT_URL . "/images";

$VIEW_PAGE = 'index.php';
$MESSAGE = '';

/**
 * hàm upload file
 * @tham số: file tên file trong form
 * @tham số: path_dir đường dẫn để upload file
 * return tên file
 */
function upload_file($file, $path_dir)
{
    $file_upload = $_FILES[$file];
    $file_name = $file_upload['name'];
    $path_file_dir = $path_dir . $file_name;
    move_uploaded_file($file_upload['tmp_name'], $path_file_dir);
    return $file_name;
}
