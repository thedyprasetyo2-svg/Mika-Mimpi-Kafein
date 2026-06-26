<?php
include "db_connect.php";

if (!isset($_POST['email']) || !isset($_POST['password'])) {
    echo json_encode([
        "success" => false,
        "message" => "Data tidak lengkap"
    ]);
    exit;
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";

$result = mysqli_query($conn, $sql);

$response = array();

if (mysqli_num_rows($result) > 0) {

    $row = mysqli_fetch_assoc($result);

    $response["success"] = true;
    $response["message"] = "Login berhasil";

    $response["user"] = array(
        "nama" => $row["nama"],
        "email" => $row["email"]
    );

} else {

    $response["success"] = false;
    $response["message"] = "Email atau Password salah";
}

echo json_encode($response);
?>