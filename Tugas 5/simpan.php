<?php
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die("Akses tidak valid.");
}

$nim = trim($_POST['nim'] ?? '');
$nama = trim($_POST['nama'] ?? '');
$email = trim($_POST['email'] ?? '');
$prodi = trim($_POST['prodi'] ?? '');
$angkatan = $_POST['angkatan'] ?? '';
$ipk = $_POST['ipk'] ?? '';

if (
    $nim === '' || $nama === '' || $email === '' ||
    $prodi === '' || $angkatan === '' || $ipk === ''
) {
    die("Semua data wajib diisi.");
}

if (!ctype_digit($nim)) {
    die("NIM harus berupa angka.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Format email tidak valid.");
}

if (
    !ctype_digit((string)$angkatan) ||
    (int)$angkatan < 1900 ||
    (int)$angkatan > (int)date('Y')
) {
    die("Angkatan tidak valid.");
}

if (
    !is_numeric($ipk) ||
    (float)$ipk < 0 ||
    (float)$ipk > 4
) {
    die("IPK harus berada di antara 0 sampai 4.");
}

$sql = "INSERT INTO mahasiswa
        (nim, nama, email, prodi, angkatan, ipk)
        VALUES (?, ?, ?, ?, ?, ?)";

try {
    $stmt = mysqli_prepare($koneksi, $sql);

    mysqli_stmt_bind_param(
        $stmt,
        "sssssd",
        $nim,
        $nama,
        $email,
        $prodi,
        $angkatan,
        $ipk
    );

    if (mysqli_stmt_execute($stmt)) {
        echo "Data mahasiswa berhasil disimpan.";
    }

    mysqli_stmt_close($stmt);

} catch (mysqli_sql_exception $e) {

    if ($e->getCode() == 1062) {
        echo "Data gagal disimpan: NIM atau email sudah terdaftar.";
    } else {
        echo "Data gagal disimpan. Silakan periksa kembali data dan database.";
    }
}

mysqli_close($koneksi);
?>