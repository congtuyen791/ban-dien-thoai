<?php

require_once './../../dao/hang_hoa.php';
$ma_hh = intval($_GET['ma_hh']);

$data = findById_hh($ma_hh);
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form them</title>
    <link rel="stylesheet" href="./../css/insert.css">
    <link rel="stylesheet" href="http://localhost/ass_duanmau/admin/css/common.css">
</head>
<body>
    <div class="container">
        
        <?php 
        require_once "../layout.php";
        
    ?>
    <div style="text-align:center; height: 50px;font-size:1.5em; font-weight:bold;line-height:50px;">
            <p>Sửa hàng hóa</p>
        </div>
    <form action="./update.php?hinh=<?php echo $data['hinh']?>" method="POST" enctype="multipart/form-data">
     
        <div class="orror" style="color:red;">
            <?php
            if (isset($_SESSION['error'])){
                echo $_SESSION['error'];
                unset($_SESSION['error']);
            }?>
        </div>
    
    <input type="hidden" name="ma_hh" value="<?php echo $ma_hh ?>">
        <div class="form-one">
            <label for="">Tên hàng hóa</label>
            <input type="text" name="ten_hh" value="<?php echo $data['ten_hh']?>">
        </div>

        <div class="form-one">
            <label for="">đơn giá</label>
            <input type="number" name="gia" value="<?php echo $data['gia']?>">
        </div>
        <div class="form-one">
            <label for="">giảm giá</label>
            <input type="number" name="giam_gia" value="<?php echo $data['giam_gia']?>">
        </div>
        <div class="form-one">
            <label for="">ảnh cũ</label><br>
            <img src="<?php echo $data['hinh']?>" alt="" style="width: 250px;height: 250px;"><br>
            <input type="file" name="hinh" value="<?php echo $data['hinh']?>">
        </div>
        <div class="form-one">
           <p>Mô tả</p>
            <textarea name="mo_ta" value="<?php echo $data['mo_ta']?>"cols="100" rows="3"><?php echo $data['mo_ta']?></textarea>
        </div>
        <div class="form-one">
            <label for="">hàng: </label>
            <div class="">
                    <input type="radio" name="dac_biet" value="<?php echo $data['dac_biet']?>"> Đặc biệt
                    <input type="radio" name="dac_biet" value="<?php echo $data['dac_biet']?>" checked> Bình thường
                </div>
        </div>
        <div class="form-one">
            <label for="">loại</label>
            <select name="ma_loai">
            <?php
                require_once "./../../dao/loai.php";
                $kq = getAll_loai();
                for ($i=0; $i < count($kq) ; $i++) { ?>
                    <option value="<?php echo $kq[$i]['ma_loai']?>"><?php echo $kq[$i]['ten_loai']?></option>
                <?php } ?>
            </select>
            </select>
        </div>
        <div class="form-one">
            <label for="">lượt xem</label>
            <input type="number" name="luot_xem" value="<?php echo $data['luot_xem']?>">
        </div>
        <div class="form-one">
            <label for="">ngày tạo</label>
            <input type="date" name="ngay_tao" value="<?php echo $data['ngay_tao']?>">
        </div>
        <div class="form-one">
            <label for="">ngày sửa</label>
            <input type="date" name="ngay_sua" value="<?php echo $data['ngay_sua']?>">
        </div>
        <div class="form-one">
            <button type="submit">Sua</button>
            <button> <a href="./index.php">Quay lại</a></button>
        </div>
    </form>
    </div>
    
</body>
</html>