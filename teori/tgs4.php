<?php

$produk = "Jaket Hoodie";
$hargaSatuan = 350000;
$jumlahBeli = 3;

$memberToko = true;
$batasDiskon = 500000;
$persenDiskon = 0;

$jumlahHarga = $hargaSatuan * $jumlahBeli;

if ($memberToko && $jumlahHarga >= $batasDiskon) {
    $persenDiskon = 10;
}

$nilaiDiskon = ($jumlahHarga * $persenDiskon) / 100;
$jumlahPembayaran = $jumlahHarga - $nilaiDiskon;

echo "=== STRUK PEMBELIAN ===<br>";
echo "Nama Barang    : $produk<br>";
echo "Harga Satuan   : Rp " . number_format($hargaSatuan, 0, ',', '.') . "<br>";
echo "Jumlah Barang  : $jumlahBeli<br>";
echo "Total Harga    : Rp " . number_format($jumlahHarga, 0, ',', '.') . "<br>";
echo "Keanggotaan    : " . ($memberToko ? "Member" : "Bukan Member") . "<br>";
echo "Diskon         : $persenDiskon%<br>";
echo "Nilai Potongan : Rp " . number_format($nilaiDiskon, 0, ',', '.') . "<br>";
echo "Total Pembayaran: Rp " . number_format($jumlahPembayaran, 0, ',', '.') . "<br>";

?>