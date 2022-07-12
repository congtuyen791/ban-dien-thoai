<?php 
require_once "./../dao/hang_hoa.php";
$ma_hh = intval($_GET['ma_hh']);

$data = findById_hh($ma_hh);

// var_dump($data);die;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .sp_ct{
            width: 600px;
            height: auto;
        }
    </style>

</head>
<body>
    
        <div class="sp_ct">
                <img src="<?php echo $data['hinh'] ?>" alt="" class="img-circle img-thumbnail" style="width: 150; height: 200px;">
                <h2><?php echo $data['ten_hh'] ?></h2> 
                <dl class="dl-horizontal"> 
                    <dt>Giá: <?php echo $data['gia'] ?></dt>
                    <dd>Mã sản phẩm: <?php echo $data['ma_hh'] ?></dd> <br>
                    <dd><?php echo $data['mo_ta'] ?></dd> 
               
        </div>
            
       
        
</body>
</html>