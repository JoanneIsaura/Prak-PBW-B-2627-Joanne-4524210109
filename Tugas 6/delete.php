<?php
require_once "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    exit("Metode tidak diizinkan. Hapus data harus melalui formulir.");
}

$nim = trim($_POST["nim"] ?? "");
if ($nim === "") {
    header("Location: index.php");
    exit;
}

$stmt = $koneksi->prepare("DELETE FROM mahasiswa WHERE nim = ?");
$stmt->bind_param("s", $nim);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    header("Location: index.php?status=deleted");
    exit;
}

header("Location: index.php");
exit;
?>