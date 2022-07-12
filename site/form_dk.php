<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/ass_duanmau/bootstrap.min.css">
</head>
<body>
<div class="col-8 offset-2">
    <div class="error" style="color:red">
    
        <?php 
        session_start();
            if (isset($_SESSION['error'])){
                echo $_SESSION['error'];
                unset($_SESSION['error']);
            }
        
        ?>
    </div>
    
    <form action="/ass_duanmau/admin/khach_hang/insert_kh.php" method="post" enctype="multipart/form-data">
            <div>
                <label for="">Tên tài khoản</label>
                <input type="text" class="form-control" name="ten_tk">
            </div>
            
            <div class="form-group">
                <label for="">mật khẩu</label>
                <input class="form-control" type="password" name="mat_khau">
            </div>
        
        
            <div class="form-group">
                <label for="">ho ten</label>
                <input type="text" name="ho_ten">
            </div>
            
            <div class="form-group">
                <label for="">ảnh</label>
                <input type="file" name="hinh">
            </div>
        
        
            <div class="form-group">
                <label for="">email</label>
                <div class="form-special">
                    <input type="email" name="email" >
                </div>
            </div>
        
        
            <div class="form-group">
                <label for="">gioi_tinh</label>
                <select name="gioi_tinh" id="">
                    <option value="0" name="gioi_tinh">nu</option>
                    <option value="1" name="gioi_tinh" checked>nam</option>
                </select>
            </div>
        
            <div class="form-group">
                <label for="">Dia chi</label>
                <input type="text" name="dia_chi">
            </div>
        
            <div class="form-group">
                <input type="hidden" name="vai_tro" value="0" checked>
            </div>
        
            <div class="form-group">
            <input type="hidden" name="kich_hoat" value="1" checked>
            </div>
    
            <button class="btn btn-primary" type="submit" name="btn_insert">Tạo</button>
            <button class="btn btn-danger"><a href="./../site/">Quay lại đăng nhập</a></button>
        
    
    </form>
    <?php
    
    
    
    
    
    ?>
</div>
</body>
</html>