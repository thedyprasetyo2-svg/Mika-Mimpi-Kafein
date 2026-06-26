<?php
header("Content-Type: application/json");
include "db_connect.php";

$nama = $_POST['nama_menu'] ?? "";
$harga = $_POST['harga'] ?? "";
$deskripsi = $_POST['deskripsi'] ?? "";
$gambar = $_POST['gambar'] ?? "";

if ($nama == "" || $harga == "" || $deskripsi == "") {
    echo json_encode([
        "success" => false,
        "message" => "Data belum lengkap"
    ]);
    exit;
}

$sql = "INSERT INTO menu (nama_menu, harga, deskripsi, gambar)
        VALUES ('$nama','$harga','$deskripsi','$gambar')";

if(mysqli_query($conn,$sql)){

    echo json_encode([
        "success"=>true,
        "message"=>"Menu berhasil ditambahkan"
    ]);

}else{

    echo json_encode([
        "success"=>false,
        "message"=>mysqli_error($conn)
    ]);
}
?>