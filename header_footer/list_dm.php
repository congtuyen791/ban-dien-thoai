<?php 
    require_once "./../dao/loai.php";

    $loai = getAll_loai();
    for ($i = 0; $i < count( $loai ); $i++) {?>
        <li><a href="/ass_duanmau/site/danh_muc.php?ma_loai=<?php echo $kq[$i]['ma_hh'] ?>"><?php echo $loai[$i]['ten_loai'] ?></a></li>
<?php } ?>