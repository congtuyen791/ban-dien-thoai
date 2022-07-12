<?php

require_once './../../dao/khach_hang.php';
$ma_kh = intval($_GET['ma_kh']);

$data = findById_kh($ma_kh);
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


        <form action="./../khach_hang/update.php?hinh=<?php echo $data['hinh']?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="error" style="color:red;">

            <?php 
                if (isset($_SESSION['error'])){
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                }

        ?></div>
            <input type="hidden" name="ma_kh" value="<?php echo $ma_kh; ?>">
            <div class="col">
                <div class="form-group">
                    <label for="">Tên tài khoản</label>
                    <input class="form-control" type="text" name="ten_tk" value="<?php echo $data['ten_tk']?>">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">mật khẩu</label>
                    <input class="form-control" type="password" name="mat_khau" value="<?php echo $data['mat_khau']?>">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">ho ten</label>
                    <input type="text" name="ho_ten"  value="<?php echo $data['ho_ten']?>">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Hình</label>
                    <img src="<?php echo $data['hinh']?>" alt="" style="width: 150px;height: 150px;">
                    <input type="file" name="hinh"  value="<?php echo $data['hinh']?>">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">email</label>
                    <div class="form-special">
                        <input type="email" name="email"  value="<?php echo $data['email']?>">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">gioi_tinh</label>
                    <select name="gioi_tinh" id="">
                        <option value="0" name="gioi_tinh" value="<?php echo $data['gioi_tinh']?>" >Nữ</option>
                        <option value="1" name="gioi_tinh" value="<?php echo $data['gioi_tinh']?>" checked>Nam</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Dia chi</label>
                    <input type="text" name="dia_chi" value="<?php echo $data['dia_chi']?>">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">vai tro</label>
                    <select name="vai_tro" id="">
                        <option value="0" name="vai_tro" value="<?php echo $data['vai_tro']?>" checked>Thành viên</option>
                        <option value="1" name="vai_tro" value="<?php echo $data['vai_tro']?>">Admin</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">kich hoat</label>
                    <select name="kich_hoat" id="">
                        <option value="1" name="kich_hoat" value="<?php echo $data['kich_hoat']?>" checked>Kích hoat</option>
                        <option value="0" name="kich_hoat" value="<?php echo $data['kich_hoat']?>">Không Kích hoat</option>
                    </select>
                </div>
            </div>

        </div>
        <button class="btn" type="submit" name="btn_insert">Sửa</button>
        <button class="btn"><a href="index.php">Danh sách</a></button>

        </form>
</html>
<body>
    