

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

        <?php 
    session_start();
        if (isset($_SESSION['error'])){
            echo $_SESSION['error'];
            unset($_SESSION['error']);
        }

    ?>
    
    <form action="./insert_add.php" method="POST" enctype="multipart/form-data">
    <div class="row">

        
        <div class="col">
            <label for="">Tên Loai</label>
            <input type="text" name="ten_loai" id="">
        </div>
        <div class="col">
            <label for="">bieu tuong</label>
            <input type="file" name="bieu_tuong" id="">
        </div>

        
        <div class="col">
            <button type="submit"> Thêm</button>
            <button ><a href="./insert.php"> Nhập lại</a></button>
            <button> <a href="./index.php">Quay lại</a></button>
        </div>
    </div>
    </form>
    </div>
    
</body>
</html>