<?php

$transaksi = [
    ["nama" => "Andi", "produk" => "Keyboard", "total" => 250000],
    ["nama" => "Siti", "produk" => "Mouse", "total" => 150000],
    ["nama" => "Budi", "produk" => "Headset", "total" => 300000],
    ["nama" => "Rina", "produk" => "Monitor", "total" => 1200000],
    ["nama" => "Doni", "produk" => "Flashdisk", "total" => 75000]
];

$totalTransaksi = 0;
$jumlahData = count($transaksi);
$i = 0;

while ($i < $jumlahData) {
    $totalTransaksi += $transaksi[$i]["total"];
    $i++;
}

$rataRata = $totalTransaksi / $jumlahData;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5 Teori</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            padding: 30px;
            color: #1e293b;
        }

        .container {
            max-width: 850px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
        }

        h1 {
            text-align: center;
            color: #1d4ed8;
        }

        p {
            text-align: center;
            color: #64748b;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 25px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        th {
            background: #1d4ed8;
            color: white;
        }

        tr:nth-child(even) {
            background: #f8fafc;
        }

        .ringkasan {
            margin-top: 25px;
            padding: 20px;
            background: #eff6ff;
            border-radius: 10px;
        }

        .ringkasan h3 {
            color: #1d4ed8;
        }

        .status-besar {
            color: #15803d;
            font-weight: bold;
        }

        .status-kecil {
            color: #b45309;
            font-weight: bold;
        }
    </style>
</head>

<body>
<div class="container">
    <h1>Laporan Transaksi</h1>
    <p>Ringkasan data transaksi sederhana</p>

    <table>
        <tr>
            <th>No.</th>
            <th>Nama Pembeli</th>
            <th>Produk</th>
            <th>Total Transaksi</th>
            <th>Status</th>
        </tr>

        <?php
        $i = 0;

        while ($i < $jumlahData) {
            $nama = htmlspecialchars($transaksi[$i]["nama"]);
            $produk = htmlspecialchars($transaksi[$i]["produk"]);
            $total = $transaksi[$i]["total"];

            if ($total >= 500000) {
                $status = "Transaksi Besar";
                $kelas = "status-besar";
            } else {
                $status = "Transaksi Kecil";
                $kelas = "status-kecil";
            }
        ?>

        <tr>
            <td><?= $i + 1 ?></td>
            <td><?= $nama ?></td>
            <td><?= $produk ?></td>
            <td>Rp <?= number_format($total, 0, ",", ".") ?></td>
            <td class="<?= $kelas ?>"><?= $status ?></td>
        </tr>

        <?php
            $i++;
        }
        ?>

    </table>

    <div class="ringkasan">
        <h3>Ringkasan Agregat</h3>
        <p>
            Total Seluruh Transaksi:
            <strong>
                Rp <?= number_format($totalTransaksi, 0, ",", ".") ?>
            </strong>
        </p>

        <p>
            Jumlah Transaksi:
            <strong><?= $jumlahData ?> transaksi</strong>
        </p>

        <p>
            Rata-rata Transaksi:
            <strong>
                Rp <?= number_format($rataRata, 0, ",", ".") ?>
            </strong>
        </p>
    </div>
</div>
</body>
</html>