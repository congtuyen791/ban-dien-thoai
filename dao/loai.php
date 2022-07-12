<?php
require_once 'pdo.php';

function getAll_loai() {
    $conn = getConnection();
    $sql = "SELECT * FROM loai ORDER BY ma_loai DESC";
    $statement = $conn->prepare($sql);
    $statement->execute([]);
    $kq = [];
    while(true) {

        $rowData = $statement->fetch();
        if ($rowData == false) {
            break;
        }

        $row = [
            'ma_loai' => $rowData['ma_loai'],
            'ten_loai' => $rowData['ten_loai'],
            'bieu_tuong' => $rowData['bieu_tuong'],
        ];
        array_push($kq, $row);
    }

    return $kq;
}

function insert(array $data) {
    $conn = getConnection();

    $sql = "INSERT INTO loai(ten_loai, bieu_tuong) VALUES(:ten_loai, :bieu_tuong)";
    // var_dump($sql, $data);die;
    $statement = $conn->prepare($sql);
    $statement->execute($data);
}

function findById(int $ma_loai) {
    $conn = getConnection();
    $sql = "SELECT * FROM loai WHERE ma_loai = :ma_loai";
    $statement = $conn->prepare($sql);

    $statement->execute([ 'ma_loai' => $ma_loai ]);
    $rowData = $statement->fetch();
    $data = [
        'ma_loai' => $rowData['ma_loai'],
        'ten_loai' => $rowData['ten_loai'],
        'bieu_tuong' => $rowData['bieu_tuong'],
    ];

    return $data;
}
function update(array $data) {
    $conn = getConnection();

    $sql = "UPDATE loai SET ten_loai = :ten_loai, bieu_tuong = :bieu_tuong WHERE ma_loai = :ma_loai";
    // var_dump($data);die;
    $statement = $conn->prepare($sql);
    $statement->execute($data);

    return true;
}

function deleteById(int $ma_loai) {
    $sql = "DELETE FROM loai WHERE ma_loai = :ma_loai";

    $conn = getConnection();
    $statement = $conn->prepare($sql);
    $statement->execute([ 'ma_loai' => $ma_loai ]);
}