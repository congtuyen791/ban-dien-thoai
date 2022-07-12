<?php 
require_once "./../dao/hang_hoa.php";

$kq = getAll_hh();
// var_dump($kq);die;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .sp{
            width: 230px;
            height: auto;
            float: left;
            margin: 10px;
            padding-top: 10px;
        }
        .chi_tiet{
            text-decoration: none;
            color: blue;
            width: 80%;
            text-align: center;
            border-radius:5px;
            padding: 5px;
            margin-top: 10px;
            background: #008000;
            border:none;
        }
        .chi_tiet a{
            text-decoration: none;
            color:#fff;

        }
        .chi_tiet:hover{
            background: red;
        }
    </style>

</head>
<body>
    <?php for ($i = 0; $i < count( $kq ); $i++) {?>
        <div class="sp">
                <img src="<?php echo $kq[$i]['hinh'] ?>" alt="" class="" style="width: 150; height: 200px;">
                <h2><?php echo $kq[$i]['ten_hh'] ?></h2> 
                <dl class="dl-horizontal"> 
                <dt>Giá: <?php echo $kq[$i]['gia'] ?></dt>
                <dd>Mã sản phẩm: <?php echo $kq[$i]['ma_hh'] ?></dd> 
                <div class="chi_tiet">
                    <dd><a href="/ass_duanmau/site/chi_tiet_sp.php?ma_hh=<?php echo $kq[$i]['ma_hh'] ?>">Chi tiết sản phẩm</a></dd> 
                </div>
        </div>
    <?php } ?>
        
</body>
</html>
  
    