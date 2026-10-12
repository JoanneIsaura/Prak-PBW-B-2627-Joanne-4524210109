<?php

$produk = [
    [
        "nama" => "Keyboard Mechanical",
        "harga" => 250000,
        "jumlah" => 2,
        "rating" => 5
    ],
    [
        "nama" => "Mouse Wireless",
        "harga" => 150000,
        "jumlah" => 1,
        "rating" => 4
    ],
    [
        "nama" => "Headset Gaming",
        "harga" => 300000,
        "jumlah" => 2,
        "rating" => 5
    ],
    [
        "nama" => "USB Flashdisk 32GB",
        "harga" => 75000,
        "jumlah" => 3,
        "rating" => 4
    ],
    [
        "nama" => "Laptop Stand",
        "harga" => 100000,
        "jumlah" => 1,
        "rating" => 3
    ],
    [
        "nama" => "Webcam HD",
        "harga" => 200000,
        "jumlah" => 1,
        "rating" => 5
    ]
];

$grandTotal = 0;

for ($i = 0; $i < count($produk); $i++) {
    $produk[$i]["subtotal"] = $produk[$i]["harga"] * $produk[$i]["jumlah"];

    $grandTotal += $produk[$i]["subtotal"];
}

$diskon = 0;

if ($grandTotal >= 1000000) {
    $diskon = $grandTotal * 0.10;
} else if ($grandTotal >= 500000) {
    $diskon = $grandTotal * 0.05;
}

$totalBayar = $grandTotal - $diskon;

function rupiah($angka){
    return "Rp " . number_format($angka, 0, ",", ".");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 7 Teori</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f5f9;
            margin: 0;
            padding: 30px;
            color: #1e293b;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        h1 {
            text-align: center;
            color: #1d4ed8;
            margin-bottom: 8px;
        }

        .deskripsi {
            text-align: center;
            color: #64748b;
            margin-bottom: 25px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #e2e8f0;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #1d4ed8;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f8fafc;
        }

        .ringkasan {
            max-width: 400px;
            margin: 25px 0 0 auto;
            padding: 20px;
            background-color: #eff6ff;
            border-radius: 10px;
        }

        .baris-total {
            display: flex;
            justify-content: space-between;
            margin: 12px 0;
        }

        .total-bayar {
            border-top: 2px solid #93c5fd;
            padding-top: 15px;
            font-size: 20px;
            font-weight: bold;
            color: #1d4ed8;
        }

        .bintang {
            color: #f59e0b;
            white-space: nowrap;
        }

        .footer {
            margin-top: 25px;
            text-align: center;
            color: #64748b;
            font-size: 13px;
        }

        @media (max-width: 650px) {
            body {
                padding: 10px;
            }

            .container {
                padding: 12px;
                overflow-x: auto;
            }

            table {
                min-width: 700px;
            }
        }
    </style>
</head>

<body>
<div class="container">
    <h1>Laporan E-Commerce</h1>
    <p class="deskripsi">
        Daftar produk, jumlah pembelian, dan total pembayaran
    </p>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Subtotal</th>
                <th>Rating</th>
            </tr>
        </thead>

        <tbody>
            <?php for ($i = 0; $i < count($produk); $i++): ?>
                <tr>
                    <td><?= $i + 1 ?></td>

                    <td>
                        <?= htmlspecialchars(
                            $produk[$i]["nama"],
                            ENT_QUOTES,
                            "UTF-8"
                        ) ?>
                    </td>

                    <td><?= rupiah($produk[$i]["harga"]) ?></td>

                    <td><?= $produk[$i]["jumlah"] ?></td>

                    <td><?= rupiah($produk[$i]["subtotal"]) ?></td>

                    <td>
                        <span class="bintang">
                            <?php
                            // Nested FOR untuk menampilkan rating
                            for ($j = 1; $j <= 5; $j++) {
                                if ($j <= $produk[$i]["rating"]) {
                                    echo "★";
                                } else {
                                    echo "☆";
                                }
                            }
                            ?>
                        </span>
                    </td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>

    <div class="ringkasan">
        <h3>Ringkasan Pembayaran</h3>

        <div class="baris-total">
            <span>Grand Total:</span>
            <strong><?= rupiah($grandTotal) ?></strong>
        </div>

        <div class="baris-total">
            <span>Diskon:</span>
            <strong><?= rupiah($diskon) ?></strong>
        </div>

        <div class="baris-total total-bayar">
            <span>Total Bayar:</span>
            <span><?= rupiah($totalBayar) ?></span>
        </div>
    </div>

    <p class="footer">
        Pemrograman Berbasis Web
    </p>
</div>
</body>
</html>