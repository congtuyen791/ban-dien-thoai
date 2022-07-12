<?php
require_once 'pdo.php';

function getAll_hh() {
    $conn = getConnection();
    $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh DESC";
    $statement = $conn->prepare($sql);
    $statement->execute([]);
    $kq = [];
    while(true) {

        $rowData = $statement->fetch();
        if ($rowData == false) {
            break;
        }

        $row = [
            'ma_hh' => $rowData['ma_hh'],
            'ten_hh' => $rowData['ten_hh'],
            'gia' => $rowData['gia'],
            'giam_gia' => $rowData['giam_gia'],
            'hinh' => $rowData['hinh'],
            'mo_ta' => $rowData['mo_ta'],
            'dac_biet' => $rowData['dac_biet'],
            'ma_loai' => $rowData['ma_loai'],
            'luot_xem' => $rowData['luot_xem'],
            'ngay_tao' => $rowData['ngay_tao'],
            'ngay_sua' => $rowData['ngay_sua'],
        ];
        array_push($kq, $row);
    }

    return $kq;
}

function insert_hh(array $data) {
    $conn = getConnection();

    $sql = "INSERT INTO hang_hoa(ten_hh, gia, giam_gia, hinh, mo_ta, dac_biet, ma_loai, luot_xem, ngay_tao, ngay_sua) VALUES(:ten_hh, :gia, :giam_gia, :hinh, :mo_ta, :dac_biet, :ma_loai, :luot_xem, :ngay_tao, :ngay_sua)";
    // var_dump($sql, $data);die;
    $statement = $conn->prepare($sql);
    $statement->execute($data);
}

function findById_hh(int $ma_hh) {
    $conn = getConnection();
    $sql = "SELECT * FROM hang_hoa WHERE ma_hh = :ma_hh";
    $statement = $conn->prepare($sql);

    $statement->execute([ 'ma_hh' => $ma_hh ]);
    $rowData = $statement->fetch();
    $data = [
        'ma_hh' => $rowData['ma_hh'],
        'ten_hh' => $rowData['ten_hh'],
        'gia' => $rowData['gia'],
        'giam_gia' => $rowData['giam_gia'],
        'hinh' => $rowData['hinh'],
        'mo_ta' => $rowData['mo_ta'],
        'dac_biet' => $rowData['dac_biet'],
        'ma_loai' => $rowData['ma_loai'],
        'luot_xem' => $rowData['luot_xem'],
        'ngay_tao' => $rowData['ngay_tao'],
        'ngay_sua' => $rowData['ngay_sua'],
    ];

    return $data;
}
function update_hh(array $data) {
    $conn = getConnection();

    $sql = "UPDATE hang_hoa SET ten_hh = :ten_hh, gia = :gia, giam_gia = :giam_gia, hinh = :hinh, mo_ta = :mo_ta, dac_biet = :dac_biet, ma_loai = :ma_loai, luot_xem = :luot_xem, ngay_tao = :ngay_tao, ngay_sua = :ngay_sua WHERE ma_hh = :ma_hh";
    // var_dump($data);die;
    $statement = $conn->prepare($sql);
    $statement->execute($data);

    return true;
}

function deleteById_hh(int $ma_hh) {
    $sql = "DELETE FROM hang_hoa WHERE ma_hh = :ma_hh";

    $conn = getConnection();
    $statement = $conn->prepare($sql);
    $statement->execute([ 'ma_hh' => $ma_hh ]);
}
function hang_hoa_select_by_loai($ma_loai) {
    $sql = "SELECT * FROM hang_hoa, loai WHERE ma_loai = :ma_loai";
    $conn = getConnection();
    $statement = $conn->prepare($sql);
    $statement->execute([ 'ma_loai' => $ma_loai ]);
    $rowData = $statement->fetch();
    $data_loai = [
        'ma_hh' => $rowData['ma_hh'],
        'ten_hh' => $rowData['ten_hh'],
        'gia' => $rowData['gia'],
        'giam_gia' => $rowData['giam_gia'],
        'hinh' => $rowData['hinh'],
        'mo_ta' => $rowData['mo_ta'],
        'dac_biet' => $rowData['dac_biet'],
        'ma_loai' => $rowData['ma_loai'],
        'luot_xem' => $rowData['luot_xem'],
        'ngay_tao' => $rowData['ngay_tao'],
        'ngay_sua' => $rowData['ngay_sua'],
    ];

    return $data_loai;

}
// function hang_hoa_cung_loai($ma_loai, $ma_hh) {
//     $sql = "SELECT * FROM hang_hoa WHERE ma_loai = :ma_loai AND ma_hh != :ma_hh LIMIT 0,3";
//     $conn = getConnection();
//     $statement = $conn->prepare($sql);
//     $statement->execute([ 'ma_loai' => $ma_loai, 'ma_hh' => $ma_hh ]);
// }
function getAll_top_hh() {
    $conn = getConnection();
    $sql = "SELECT * FROM hang_hoa ORDER BY luot_xem DESC LIMIT 10";
    $statement = $conn->prepare($sql);
    $statement->execute([]);
    $data_lx = [];
    while(true) {

        $rowData = $statement->fetch();
        if ($rowData == false) {
            break;
        }

        $row = [
            'ma_hh' => $rowData['ma_hh'],
            'ten_hh' => $rowData['ten_hh'],
            'gia' => $rowData['gia'],
            'giam_gia' => $rowData['giam_gia'],
            'hinh' => $rowData['hinh'],
            'mo_ta' => $rowData['mo_ta'],
            'dac_biet' => $rowData['dac_biet'],
            'ma_loai' => $rowData['ma_loai'],
            'luot_xem' => $rowData['luot_xem'],
            'ngay_tao' => $rowData['ngay_tao'],
            'ngay_sua' => $rowData['ngay_sua'],
        ];
        array_push($data_lx, $row);
    }

    return $data_lx;
}
function hang_hoa_select_by_ma_loai($ma_loai){
    $sql = "SELECT * FROM hang_hoa a
    Join loai b on a.ma_loai=b.ma_loai
    where b.ma_loai=? ";
    return pdo_query($sql, $ma_loai);

}