<?php
include "db_connect.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO user(nama,email,password,role)
VALUES('$nama','$email','$password','user')";

if(mysqli_query($conn,$sql)){
    echo "Berhasil";
}else{
    echo "Gagal";
}
?>