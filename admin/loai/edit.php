<?php

require_once './../../dao/loai.php';
$ma_loai = intval($_GET['ma_loai']);

$data = findById($ma_loai);
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/ass_duanmau/admin/css/common.css">
</head>
<body>
<?php require_once "../layout.php" ?>
        <div class="error">

            <?php 
                if (isset($_SESSION['error'])){
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                }

        ?>


        <form action="./../loai/update.php?bieu_tuong=<?php echo $data['bieu_tuong']?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <input type="hidden" name="ma_loai" value="<?php echo $ma_loai; ?>">
            <div class="so2">
                <div class="so3">
                    <label for="">Tên tên loại</label>
                    <input class="form-control" type="text" name="ten_loai" value="<?php echo $data['ten_loai']?>">
                </div>
            </div>
            <div class="so2">
                <div class="so3">
                    <label for="">Biểu tượng</label>
                    <input class="form-control" type="file" name="bieu_tuong" value="<?php echo $data['bieu_tuong']?>">
                </div>
            </div>
            
        </div>
        <button class="btn" type="submit" name="btn_insert">Sửa</button>
        <button class="btn"><a href="index.php">Danh sách</a></button>

        </form>
</html>
<body>
    