<?php
require_once "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: create.php");
    exit;
}

$nim = trim($_POST["nim"] ?? "");
$nama = trim($_POST["nama"] ?? "");
$email = trim($_POST["email"] ?? "");
$prodi = trim($_POST["prodi"] ?? "");
$angkatan = filter_input(INPUT_POST, "angkatan", FILTER_VALIDATE_INT);
$ipkInput = $_POST["ipk"] ?? "";
$ipk = filter_var($ipkInput, FILTER_VALIDATE_FLOAT);

if ($nim === "" || $nama === "" || $prodi === "" ||
    !filter_var($email, FILTER_VALIDATE_EMAIL) ||
    $angkatan === false || $angkatan === null || $angkatan < 1900 || $angkatan > 2100 ||
    $ipk === false || $ipk < 0 || $ipk > 4) {
    exit("Data tidak valid. <a href='create.php'>Kembali ke formulir</a>");
}

try {
    $stmt = $koneksi->prepare(
        "INSERT INTO mahasiswa (nim, nama, email, prodi, angkatan, ipk) VALUES (?, ?, ?, ?, ?, ?)"
    );
    $stmt->bind_param("ssssid", $nim, $nama, $email, $prodi, $angkatan, $ipk);
    $stmt->execute();
    header("Location: index.php?status=saved");
    exit;
} catch (mysqli_sql_exception $e) {
    error_log($e->getMessage());
    if ($e->getCode() === 1062) {
        exit("NIM sudah terdaftar. <a href='create.php'>Kembali</a>");
    }
    exit("Data gagal disimpan. <a href='create.php'>Coba lagi</a>");
}
?>