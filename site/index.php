
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        main{
            width: 100%;
            height: auto;
            display: grid;
            grid-template-columns: 20% 80%;
            }
            .left{
                background: #EBECEB;
            }
            .left a{
                text-decoration: none;
                color: blue;
            }
            .left a:hover{
                color: red;
            }
            .link{
                padding-left: 20px;
                margin-bottom: 10px;
            }
            .td{
                text-align: center;
                padding: 10px 0;
                background: #008000;
                color: #fff;
            }
            .right{
                background: #EBECEB;
                
                margin-left: 10px;
                
            }
            .list_sp{
                width: 100%;
                height: auto;
                padding-left: 20px;
            }
            .top-hh{
                width: 100%;
                height: auto;
                padding-left: 5px;
                padding-top: 10px;
            }
    </style>
    
</head>
<body>
        <?php require_once "../header_footer/head.php"; ?>
        <main>
            <div class="left">
           
                <div class="dang_nhap" style="height: auto;">
                
                    <?php
                        require_once "./../dao/khach_hang.php";
                        if (isset($_POST['dang_nhap'])) {

                            $user = $_POST['ten_tk'];
                            $password = $_POST['mat_khau'];
                            $khach_hang = khach_hang_by_ten_kh($user, $password);
                            if (!empty($khach_hang)) {
                                $_SESSION['user'] = $khach_hang;
                            }
                            
                        }
                        
                    ?>

                    <form method="POST" action="/ass_duanmau/site/">
                        <?php if (isset($_SESSION['user'])) : ?>
                            <h2 style="text-align: center;padding: 10px;background:#008000; color:#fff;font-size:18px;">Tài khoản</h2>
                            <div style="padding-left: 10px;">
                                Tên tài khoản: <?= $_SESSION['user']['ten_tk'] ?>
                                
                                <button name="dang_xuat" type="submit">
                                    <?php if (isset($_POST['dang_xuat'])) {
                                        session_destroy();
                                    } ?>Thoát</button>
                                </div>
                            <?php else : ?>
                                    <h2 style="text-align: center;padding: 10px;background:#008000; color:#fff;font-size:18px;">Đăng nhập</h2>
                                    <div style="padding-left: 10px;">
                                        <label for="id">Tài khoản</label>
                                        <input id="id" type="text" name="ten_tk" value="">
                                    </div>

                                    <div style="padding-left: 10px;">
                                        <label for="id">Mật khẩu:</label>
                                        <input id="password" type="text" name="mat_khau" value="">
                                    </div>
                                    <div style="margin-top: 20px;padding-left: 10px;">
                                        <input name="dang_nhap" type="submit" value="Đăng nhập" style="background: blue; color:#fff; cursor: pointer; padding: 5px; border: none;"><br><br>
                                        <button style="border:none;"><a style="background: red; color:#fff; cursor: pointer; padding: 5px;border: none;" href="../site/form_dk.php">Đăng ký</a></button>
                                    </div>
                                    <li style="padding: 10px;"><a href="#">Quyên mật khẩu</a></li>
                            
                            <?php endif; ?>
                    </form>
                </div>
                
               
                <div class="dm">
                    <div class="td">
                        <h3>Danh mục</h3>
                    </div>
                    <div class="link">
                        <?php 
                            require_once "../header_footer/list_dm.php";
                        ?>
                    </div>
                    
                </div>
                <div class="top">
                    <div class="td">
                        <h3>Top sản phẩm</h3>
                    </div>
                    <div class="top-hh">
                        <?php require_once "../header_footer/top.php" ?>
                    </div>

                </div>
            </div>
            <div class="right">
                <div class="td">
                    <h3>Sản phẩm mới nhất</h3>
                </div>
                <div class="list_sp">
                    <?php 
                        require_once "../header_footer/list_hh.php";
                    ?>
                    
                </div>
            </div>



        </main>
        
        <?php require_once "../header_footer/footer.php"; ?>
        <script>    
            var anh = document.querySelector("#anh");
            var ds_anh = ["img/1.png", "img/2.png", "img/3.png"];
            var stt = 0;
            var list_obj_anh = [];
            function slideanh() {
                for (i = 0; i < ds_anh.length; i++) {
                    list_obj_anh[i] = new Object();
                    list_obj_anh[i].src = ds_anh[i];
                }
            }
           
            var interval_obj = setInterval(function(){
                stt++;
                if (stt == ds_anh.length)
                    stt = 0;
                anh.setAttribute("src", list_obj_anh[stt].src);
            }, 3000);

            slideanh();
            anh.setAttribute("src", list_obj_anh[stt].src);
        </script>
</body>
</html>

