<?php

/**
 * xét thư mục hiên tại
 * . lùi lại 1 thư mục
 */
require_once "./../../dao/loai.php";

$kq = getAll_loai();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị khách hàng</title>
    <link rel="stylesheet" href="http://localhost/ass_duanmau/admin/css/common.css">
    <style>
        table {
            width: 100%;
        }
        thead{
            background:#008000;
            color:#FFFAFA;
            height: 50px;
            width: 100%;
        }
        thead td{
            padding: 10px;
            text-align: center;
        }
        tbody{
            text-align: center;
        }
        tbody td{
            padding: 20px;
        }
    </style>
    
</head>
<body>
    <div class="container">
        
    
        <?php require_once "../layout.php" ?>
        <div style="text-align:center; height: 50px;font-size:1.5em; font-weight:bold;line-height:50px;">
            <p>Quản lý loại hàng</p>
        </div>
        <div class="row">
            <table border="1" cellpadding="1" cellspacing="1">
                <thead>
                    <tr>
                        <td>ma loai</td>
                        <td>ten loai</td>
                        <td>bieu tuong</td>
                        <td colspan="2">Thao tác</td>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < count( $kq ); $i++) {?>
                        <tr>
                            <td>
                                <?php echo $kq[$i]['ma_loai'] ?>
                            </td>
                            <td>
                                <?php echo $kq[$i]['ten_loai'] ?>
                            </td>
                            <td>
                                <img src="<?php echo $kq[$i]['bieu_tuong'] ?>" alt="">
                            </td>
                            <td>
                                <a href="/ass_duanmau/admin/loai/edit.php?ma_loai=<?php echo $kq[$i]['ma_loai'] ?>">Update</a>
                            </td>
                            <td>
                                <a class="" href="/ass_duanmau/admin/loai/delete.php?ma_loai=<?php echo $kq[$i]['ma_loai'] ?>" onclick="return confirm('Bạn có chắc muốn xóa không?')">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <button style="padding:10px 20px; margin: 20px 0 0 0;background: #0BD400;border:none; border-radius:5px;cursor: pointer;color:#fff;"><a style="" href="insert.php">Thêm mới</a></button>
        </div>
    </div>
</body>
</html>