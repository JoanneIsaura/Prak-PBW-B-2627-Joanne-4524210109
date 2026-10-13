<?php
require_once "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit;
}

$nim = trim($_POST["nim"] ?? "");
$nama = trim($_POST["nama"] ?? "");
$email = trim($_POST["email"] ?? "");
$prodi = trim($_POST["prodi"] ?? "");
$angkatan = filter_input(INPUT_POST, "angkatan", FILTER_VALIDATE_INT);
$ipk = filter_var($_POST["ipk"] ?? "", FILTER_VALIDATE_FLOAT);

if ($nim === "" || $nama === "" || $prodi === "" ||
    !filter_var($email, FILTER_VALIDATE_EMAIL) ||
    $angkatan === false || $angkatan === null || $angkatan < 1900 || $angkatan > 2100 ||
    $ipk === false || $ipk < 0 || $ipk > 4) {
    exit("Data tidak valid. <a href='index.php'>Kembali ke daftar</a>");
}

$stmt = $koneksi->prepare(
    "UPDATE mahasiswa SET nama = ?, email = ?, prodi = ?, angkatan = ?, ipk = ? WHERE nim = ?"
);
$stmt->bind_param("sssids", $nama, $email, $prodi, $angkatan, $ipk, $nim);
$stmt->execute();

if ($stmt->affected_rows >= 0) {
    header("Location: index.php?status=updated");
    exit;
}
exit("Data gagal diperbarui. <a href='index.php'>Kembali</a>");
?>