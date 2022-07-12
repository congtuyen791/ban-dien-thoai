

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
<?php require_once "../layout.php" ?>

    
<div class="orror" style="color:red;">
        <?php
            session_start();
        if (isset($_SESSION['error'])){
            echo $_SESSION['error'];
            unset($_SESSION['error']);
        }?>
    </div>
    <form action="./insert_add.php" method="POST" enctype="multipart/form-data">
    <div class="row">

        <div class="col">
            <label for="">Tên hàng hóa</label>
            <input type="text" name="ten_hh" id="">
        </div>

        <div class="col">
            <label for="">đơn giá</label>
            <input type="number" name="gia" id="">
        </div>
        <div class="col">
            <label for="">giảm giá</label>
            <input type="number" name="giam_gia" id="">
        </div>
        <div class="col">
            <label for="">ảnh</label>
            <input type="file" name="hinh" id="">
        </div>
        <div class="col">
           <p>Mô tả</p>
            <textarea name="mo_ta" id="" cols="50" rows="3"></textarea>
        </div>
        <div class="col">
            <label for="">hàng: </label>
            <div class="form-special">
                    <input type="radio" name="dac_biet" value="1"> Đặc biệt
                    <input type="radio" name="dac_biet" value="0" checked> Bình thường
                </div>
        </div>
        <div class="col">
            <label for="">loại</label>
            <select name="ma_loai" id=""  class="form-control">
            <?php
                require_once "./../../dao/loai.php";
                $kq = getAll_loai();
                for ($i=0; $i < count($kq) ; $i++) { ?>
                    <option value="<?php echo $kq[$i]['ma_loai']?>"><?php echo $kq[$i]['ten_loai']?></option>
                <?php } ?>
                

                    
            </select>
        </div>
        <div class="col">
            <label for="">lượt xem</label>
            <input type="number" name="luot_xem" id="">
        </div>
        <div class="col">
            <label for="">ngày tạo</label>
            <input type="date" name="ngay_tao" id="">
        </div>
        <div class="col">
            <label for="">ngày sửa</label>
            <input type="date" name="ngay_sua" id="">
        </div>
        <div class="col">
            <button class="btn" type="submit"> Them</button>
            <button class="btn"><a href="insert.php">Nhập lại</a></button>
            <button class="btn"> <a href="./index.php">Quay lại</a></button>
        </div>
    </div>
    </form>
    </div>
    
</body>
</html>