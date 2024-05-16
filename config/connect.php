<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "smkarimbi";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password, array(PDO::ATTR_PERSISTENT => true));
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // die ("Berhasil konek ke database");
} catch (PDOException $e) {
    echo "Konek Gagal : " . $e->getMessage();
}