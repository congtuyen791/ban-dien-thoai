<?php

/**
 * xét thư mục hiên tại
 * . lùi lại 1 thư mục
 */
require_once "./../../dao/khach_hang.php";

$kq = getAll_kh();
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
            padding: 10px;
            text-align: center;
        }
        tbody{
            text-align: center;
        }
        a{
            text-decoration: none;
            color: blue;
        }
        a:hover{
            color:red;
        }
    </style>
    
</head>
<body>
    <div class="container">
        
    
        <?php require_once "../layout.php" ?>
        <div style="text-align:center; height: 50px;font-size:1.5em; font-weight:bold;line-height:50px;">
            <p>Quản lý khách hàng</p>
        </div>
        <div class="row">
            <table border="1" cellpadding="1" cellspacing="1">
                <thead>
                    <tr>
                        <td>Mkh</td>
                        <td>Tên tài khoản</td>
                        <td>mật khẩu</td>
                        <td>họ tên</td>
                        <td>ảnh</td>
                        <td>email</td>
                        <td>giới tính</td>
                        <td>địa chỉ</td>
                        <td>vai trò</td>
                        <td>kích hoạt</td>
                        <td colspan="2">Thao tác</td>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < count( $kq ); $i++) {?>
                        <tr>
                            <td>
                                <?php echo $kq[$i]['ma_kh'] ?>
                            </td>
                            <td>
                                <?php echo $kq[$i]['ten_tk'] ?>
                            </td>
                            <td>
                                <?php echo $kq[$i]['mat_khau'] ?>
                            </td>
                            <td>
                                <?php echo $kq[$i]['ho_ten'] ?>
                            </td>
                            <td>
                                <img src="<?php echo $kq[$i]['hinh'] ?>" alt="" style="width: 100px; height: auto;">
                            </td>
                            <td>
                                <?php echo $kq[$i]['email'] ?>
                            </td>
                            <td>
                                <?php echo $kq[$i]['gioi_tinh'] ?>
                            </td>
                            <td>
                                <?php echo $kq[$i]['dia_chi'] ?>
                            </td>
                            <td>
                                <?php echo $kq[$i]['vai_tro'] ?>
                            </td>
                            <td>
                                <?php echo $kq[$i]['kich_hoat'] ?>
                            </td>
                           
                            <td>
                                <a href="/ass_duanmau/admin/khach_hang/edit.php?ma_kh=<?php echo $kq[$i]['ma_kh'] ?>">Update</a>
                            </td>
                            <td>
                                <a class="" href="/ass_duanmau/admin/khach_hang/delete.php?ma_kh=<?php echo $kq[$i]['ma_kh'] ?>" onclick="return confirm('Bạn có chắc muốn xóa không?')">Delete</a>
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