<?php
require_once "pdo.php";
//function binh_luan_insert
function binh_luan_insert($noi_dung, $ma_kh, $ma_hh){
    $sql = "INSERT INTO binh_luan(noi_dung, ma_kh, ma_hh) VALUES(?,?,?)";
    pdo_execute($sql, $noi_dung, $ma_kh, $ma_hh);
}
function binh_luan_select_by_hang_hoa($ma_hh) {
    $sql = "SELECT * FROM binh_luan bl INNER JOIN khach_hang kh ON bl.ma_kh=kh.ma_kh WHERE ma_hh=?";
    return pdo_query($sql, $ma_hh);
}