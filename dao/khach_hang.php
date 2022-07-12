<?php
require_once 'pdo.php';

function getAll_kh() {
    $conn = getConnection();
    $sql = "SELECT * FROM khach_hang ORDER BY ma_kh DESC";
    $statement = $conn->prepare($sql);
    $statement->execute([]);
    $kq = [];
    while(true) {

        $rowData = $statement->fetch();
        if ($rowData == false) {
            break;
        }

        $row = [
            'ma_kh' => $rowData['ma_kh'],
            'ten_tk' => $rowData['ten_tk'],
            'mat_khau' => $rowData['mat_khau'],
            'ho_ten' => $rowData['ho_ten'],
            'hinh' => $rowData['hinh'],
            'email' => $rowData['email'],
            'gioi_tinh' => $rowData['gioi_tinh'],
            'dia_chi' => $rowData['dia_chi'],
            'vai_tro' => $rowData['vai_tro'],
            'kich_hoat' => $rowData['kich_hoat'],
        ];

        array_push($kq, $row);
    }

    return $kq;
}

function insert_kh(array $data) {
    $conn = getConnection();

    $sql = "INSERT INTO khach_hang(ten_tk, mat_khau, ho_ten, hinh, email, gioi_tinh, dia_chi, vai_tro, kich_hoat) VALUES(:ten_tk, :mat_khau, :ho_ten, :hinh, :email, :gioi_tinh, :dia_chi, :vai_tro, :kich_hoat)";
    $statement = $conn->prepare($sql);
    $statement->execute($data);
}

function findById_kh(int $ma_kh) {
    $conn = getConnection();
    $sql = "SELECT * FROM khach_hang WHERE ma_kh = :ma_kh";
    $statement = $conn->prepare($sql);

    $statement->execute([ 'ma_kh' => $ma_kh ]);
    $rowData = $statement->fetch();
    $data = [
        'ma_kh' => $rowData['ma_kh'],
        'ten_tk' => $rowData['ten_tk'],
        'mat_khau' => $rowData['mat_khau'],
        'ho_ten' => $rowData['ho_ten'],
        'hinh' => $rowData['hinh'],
        'email' => $rowData['email'],
        'gioi_tinh' => $rowData['gioi_tinh'],
        'dia_chi' => $rowData['dia_chi'],
        'vai_tro' => $rowData['vai_tro'],
        'kich_hoat' => $rowData['kich_hoat'],
    ];

    return $data;
}

function update_kh(array $data) {
    $conn = getConnection();

    $sql = "UPDATE khach_hang SET ten_tk = :ten_tk, mat_khau = :mat_khau, ho_ten = :ho_ten, hinh = :hinh, email = :email, gioi_tinh = :gioi_tinh, dia_chi = :dia_chi, vai_tro = :vai_tro, kich_hoat = :kich_hoat WHERE ma_kh = :ma_kh";

    $statement = $conn->prepare($sql);
    $statement->execute($data);

    return true;
}

function deleteById_kh(int $ma_kh) {
    $sql = "DELETE FROM khach_hang WHERE ma_kh = :ma_kh";

    $conn = getConnection();
    $statement = $conn->prepare($sql);
    $statement->execute([ 'ma_kh' => $ma_kh ]);
}

function khach_hang_by_ten_kh($user, $password){
    $sql="SELECT * FROM khach_hang WHERE ten_tk = ? AND mat_khau = ?" ;
    $conn = pdo_query_one($sql, $user, $password);
    return $conn;

}
function khach_hang_kt($ten_tk) {
    $conn = getConnection();
    $sql = "SELECT * FROM khach_hang WHERE ten_tk = '$ten_tk'";
    $statement = $conn->prepare($sql);
    $statement->execute([ 'ten_tk' => $ten_tk ]);
    $rowData = $statement->fetch();
    $data = ['ten_tk'];
    return $data;
}
