<?php
include "db_connect.php";

$id_user = $_POST['id_user'];
$total = $_POST['total'];

$status = "Diproses";

$waktu_pesan = date("Y-m-d H:i:s");
$waktu_selesai = date("Y-m-d H:i:s", strtotime("+10 minutes"));

$sql = "INSERT INTO orders(
id_user,
total,
status,
waktu_pesan,
waktu_selesai
)
VALUES(
'$id_user',
'$total',
'$status',
'$waktu_pesan',
'$waktu_selesai'
)";

if(mysqli_query($conn,$sql)){
    echo "Berhasil";
}else{
    echo "Gagal";
}
?>