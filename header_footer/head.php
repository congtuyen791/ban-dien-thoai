<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{margin: 0;padding: 0; box-sizing: border-box;}
        .container {
            max-width: 980px;
            margin: auto;
            height: auto;
            font-family: tahoma;
        }
        header{
            height: auto;
            background: #F8F8F8;
        }
        .logo {
            background:#7FFF00;
            color:#FF0000;
            height: 50px;
            border-radius: 10px;
            text-align: center;
            line-height: 50px;
            font-size:30px;
        }
        nav {
            background-color: #008000;
            margin: 10px 0;
            border-radius: 10px;
            display: grid;
            grid-template-columns: 1fr 1fr;
        }
        nav ul {
            display: flex;
            list-style: none;
        }
        nav ul a {
            display: block;
            padding: 20px;
            color: #ccc;
            text-decoration: none;
        }
        nav ul a:hover {
            background-color: rgba(0, 0, 0, 0.4);
            border-radius: 10px;
            color: #fff;
        }
        .timkiem{
            background: #008000;
            line-height: 60px;
            border-radius: 10px;
            text-align: center;
        }
        .timkiem .o{
            width: 70%;
            height: 60%;
            border-radius: 10px;
            border: none;
            padding: 0 0 0 20px;
        }
        .timkiem .nut{
            width: 20%;
            height: 60%;
            border-radius: 10px;
            border: none;
            cursor: pointer;
            background: #FF0000;
        }
        footer {
            max-width: 980px;
            margin: 10px auto;
            color: white;
            border-radius:10px;
        }
        .dn{
            width: 150px;
            text-align: center;
        }
    </style>
    

</head>
<body>
    <div class="container">
        <header>
            <div class="logo">
                <h3>Công Tuyền Store</h3>
            </div>
            <nav>
                <ul>
                    <li><a href="/ass_duanmau/index.php">Trang chủ</a></li>
                    <li><a href="">Sản Phẩm</a></li>
                    <li><a href="">Giới thiệu</a></li>
                    <!-- <li class="dn"><a href="./../site/login_form.php">Đăng nhập</a></li> -->
                    
                </ul>
                <form action="" method="post" class="timkiem">
                    <input type="search" placeholder="Tìm kiếm" class="o">
                    <input type="submit" value="Tìm kiếm" class="nut">
                </form>
            </nav>
            <div class="banner" style="height: 380px;">
                <img src="../img/1.png" alt="" id="anh" style="width: 100%;">
            </div>
    </header>
        
    </body>
</html>