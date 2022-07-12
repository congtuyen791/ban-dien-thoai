<?php

/**
 * xét thư mục hiên tại
 * . lùi lại 1 thư mục
 */
require_once "./../../dao/hang_hoa.php";

$kq = getAll_hh();
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
        thead{
            background:#008000;
            color:#FFFAFA;
            height: 50px;
        }
        thead td{
            padding: 20px;
            text-align: center;
        }
        tbody{
            text-align: center;
        }
    </style>
    
</head>
<body>
    <div class="container">

        <?php require_once "../layout.php" ?>
        <div style="text-align:center; height: 50px;font-size:1.5em; font-weight:bold;line-height:50px;">
            <p>Quản lý hàng hóa</p>
        </div>
        <div class="row">
            <table border="1" cellpadding="1" cellspacing="1">
                <thead>
                    <tr>
                        <td>Mã hàng hóa</td>
                        <td>Tên hàng hóa</td>
                        <td>giá</td>
                        <!-- <td>giảm giá</td> -->
                        <td>hình</td>
                        <!-- <td>mô tả</td> -->
                        <td>Đặc biệt</td>
                        <td>mã Loại</td>
                        <td>lượt xem</td>
                        <td>ngày tạo</td>
                        <td>ngày sửa</td>
                        <td colspan="2">Thao tác</td>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < count( $kq ); $i++) {?>
                        <tr>
                            <td>
                                <?php echo $kq[$i]['ma_hh'] ?>
                            </td>
                            <td>
                                <?php echo $kq[$i]['ten_hh'] ?>
                            </td>
                            <td>
                                <?php echo $kq[$i]['gia'] ?>
                            </td>
                          
                            <td>
                                <img src="<?php echo $kq[$i]['hinh'] ?>" alt="" style ="width: 150px; height: 150px;">
                            </td>
                            
                            <td>
                                <?php echo $kq[$i]['dac_biet'] ?>
                            </td>
                            <td>
                                <?php echo $kq[$i]['ma_loai'] ?>
                            </td>
                            <td>
                                <?php echo $kq[$i]['luot_xem'] ?>
                            </td>
                            <td>
                                <?php echo $kq[$i]['ngay_tao'] ?>
                            </td>
                            <td>
                                <?php echo $kq[$i]['ngay_sua'] ?>
                            </td>
                           
                            <td>
                                <a href="/ass_duanmau/admin/hang_hoa/edit.php?ma_hh=<?php echo $kq[$i]['ma_hh'] ?>">Update</a>
                            </td>
                            <td>
                                <a class="" href="/ass_duanmau/admin/hang_hoa/delete.php?ma_hh=<?php echo $kq[$i]['ma_hh'] ?>" onclick="return confirm('Bạn có chắc muốn xóa không?')">Delete</a>
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