<?php
// biodata.php

function statusKelulusan(float $ipk): string
{
    if ($ipk >= 3.50) {
        return 'Sangat Memuaskan';
    }

    if ($ipk >= 3.00) {
        return 'Memuaskan';
    }

    return 'Perlu Peningkatan';
}

$mahasiswa = [
    'nim' => '4524210126',
    'nama' => 'Rihhadatul Aisy Septifani Zain',
    'prodi' => 'Teknik Informatika',
    'semester' => 5,
    'ipk' => 3.82,

    // MODIFIKASI 1
    'email' => 'mahasiswa@example.com'
];

// MODIFIKASI 2
if ($mahasiswa['semester'] >= 7) {
    $statusSemester = 'Semester Akhir';
} else {
    $statusSemester = 'Semester Berjalan';
}
?>

<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Biodata Mahasiswa</title>

    <!-- MODIFIKASI 3: CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 40px;
        }

        .container {
            width: 500px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
        }

        h1 {
            text-align: center;
        }

        li {
            margin: 10px 0;
        }

        .status {
            margin-top: 15px;
            padding: 10px;
            background-color: #eee;
        }
    </style>
</head>

<body>
<div class="container">
    <h1>Biodata Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $kunci => $nilai): ?>
            <li>
                <?= ucfirst($kunci) ?> :
                <?= htmlspecialchars((string)$nilai) ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <div class="status">
        <p>
            <strong>Predikat IPK:</strong>
            <?= statusKelulusan($mahasiswa['ipk']) ?>
        </p>

        <p>
            <strong>Status:</strong>
            <?= $statusSemester ?>
        </p>
    </div>
</div>
</body>
</html>