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
    <div style="color:red">
    
    <?php 
    session_start();
        if (isset($_SESSION['error'])){
            echo $_SESSION['error'];
            unset($_SESSION['error']);
        }
    
    ?>
    </div>
    
    <form action="./../khach_hang/insert_add.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Tên tài khoản</label>
                    <input class="form-control" type="text" name="ten_tk" placeholder="tên tài khoản">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">mật khẩu</label>
                    <input class="form-control" type="password" name="mat_khau">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">ho ten</label>
                    <input type="text" name="ho_ten">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">email</label>
                    <div class="form-special">
                        <input type="email" name="email" >
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">ảnh</label>
                    <div class="form-special">
                        <input type="file" name="hinh" >
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">gioi_tinh</label>
                    <select name="gioi_tinh" id="">
                        <option value="0" name="gioi_tinh">nu</option>
                        <option value="1" name="gioi_tinh">nam</option>
                    </select>
                </div>
            </div>
            <div class="full">
                <div class="form-group">
                    <label for="">Dia chi</label>
                    <input type="text" name="dia_chi">
                </div>
            </div>
            <div class="full">
                <div class="form-group">
                    <label for="">vai tro</label>
                    <input type="number" name="vai_tro">
                </div>
            </div>
            <div class="full">
                <div class="form-group">
                    <label for="">kich hoat</label>
                    <input type="text" name="kich_hoat">
                </div>
            </div>
    
        </div>
        <button class="btn" type="submit" name="btn_insert">Thêm</button>
        <button class="btn"><a href="insert.php">Nhập lại</a></button>
        <button class="btn"><a href="index.php">Danh sách</a></button>
    
    </form>
</body>
</html>