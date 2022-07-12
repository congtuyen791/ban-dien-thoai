<style>
    .top_sp{
        width: 100%;
        height: 80px;
        border-bottom: 1px solid #CEF0F0;
        display: grid;
        grid-template-columns: 30% 70%;
        font-size:12px;
    }
    .top_sp p{

    }
</style>

<?php 
    require_once "./../dao/hang_hoa.php";

    $data_lx = getAll_top_hh();
    for ($i = 0; $i < count( $data_lx ); $i++) {?>
    <div class="top_sp">
        <div>
            <img src="<?php echo $data_lx[$i]['hinh'] ?>" alt="" style="width:50px; height: 60px;">

        </div>
        <div>
            <a href="/ass_duanmau/site/chi_tiet_sp.php?ma_hh=<?php echo $data_lx[$i]['ma_hh'] ?>" value="<?php echo $data_lx[$i]['ten_hh'] ?>"><?php echo $data_lx[$i]['ten_hh'] ?></a>
        </div>
        
    </div>
        
<?php } ?>
  
    