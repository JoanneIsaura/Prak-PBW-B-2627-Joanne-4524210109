<?php

// Data mahasiswa
$nim = "4524210109";
$nama = "Joanne Trixie Isaura";
$semester = 5;
$ipk = 3.73;
$aktif = true;

// Konstanta
define("NamaKampus", "Universitas Pancasila");
define("MAX_SKS", 24);

// Array mata kuliah
$mataKuliah = [
    "Pemrograman Berbasis Web" => 3,
    "Metode Numerik" => 3,
    "Prak. Pemrograman Berbasis Web" => 1
];

// Menghitung total SKS
$totalSKS = 0;

foreach ($mataKuliah as $matkul => $sks) {
    $totalSKS += $sks;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Mahasiswa</title>

    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f1f5f9;
            min-height: 100vh;
            padding: 40px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
        }

        /* ================= HEADER ================= */

        .header {
            background: #1e3a5f;
            color: white;
            padding: 30px 35px;
            border-radius: 18px;
            margin-bottom: 25px;

            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h1 {
            font-size: 28px;
            margin-bottom: 8px;
        }

        .header p {
            color: #dbeafe;
            font-size: 14px;
        }

        .header-badge {
            background: white;
            color: #1e3a5f;
            padding: 10px 18px;
            border-radius: 30px;
            font-size: 13px;
            font-weight: bold;
        }


        /* ================= PROFIL ================= */

        .profile-layout {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 20px;
            margin-bottom: 25px;
        }

        .profile-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.06);
        }

        .profile-title {
            color: #1e3a5f;
            font-size: 20px;
            margin-bottom: 20px;
        }

        .profile-info {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        .info-item {
            padding: 15px;
            background: #f8fafc;
            border-radius: 10px;
            border-left: 4px solid #1e3a5f;
        }

        .label {
            font-size: 12px;
            color: #64748b;
            margin-bottom: 6px;
        }

        .value {
            font-size: 16px;
            font-weight: bold;
            color: #1e293b;
        }


        /* ================= RINGKASAN ================= */

        .summary {
            background: #1e3a5f;
            color: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.06);
        }

        .summary h2 {
            font-size: 19px;
            margin-bottom: 25px;
        }

        .summary-item {
            margin-bottom: 22px;
        }

        .summary-label {
            font-size: 12px;
            color: #cbd5e1;
            margin-bottom: 5px;
        }

        .summary-value {
            font-size: 27px;
            font-weight: bold;
        }

        .active {
            display: inline-block;
            background: #dcfce7;
            color: #166534;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
        }


        /* ================= MATA KULIAH ================= */

        .course-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 25px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.06);
        }

        .section-title {
            color: #1e3a5f;
            font-size: 20px;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #f1f5f9;
            color: #475569;
            text-align: left;
            padding: 14px;
            font-size: 13px;
        }

        td {
            padding: 14px;
            border-bottom: 1px solid #e2e8f0;
            color: #334155;
            font-size: 14px;
        }

        td:first-child {
            width: 60px;
            text-align: center;
        }

        td:last-child {
            width: 80px;
            text-align: center;
        }

        .course-number {
            background: #dbeafe;
            color: #1e3a5f;
            padding: 5px 9px;
            border-radius: 50%;
            font-weight: bold;
        }

        .total {
            display: flex;
            justify-content: space-between;
            align-items: center;

            margin-top: 20px;
            padding: 15px 18px;

            background: #eff6ff;
            border-radius: 10px;

            color: #1e3a5f;
            font-weight: bold;
        }


        /* ================= DEBUG ================= */

        .debug-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 25px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.06);
        }

        .debug {
            background: #0f172a;
            color: #38bdf8;
            padding: 18px;
            border-radius: 10px;

            font-family: Consolas, monospace;
            font-size: 13px;
            line-height: 1.7;

            overflow-x: auto;
        }

        /* ================= FOOTER ================= */

        .footer {
            text-align: center;
            color: #64748b;
            font-size: 13px;
            padding: 10px;
        }

        /* ================= RESPONSIVE ================= */

        @media (max-width: 700px) {
            body {
                padding: 20px;
            }

            .header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .profile-layout {
                grid-template-columns: 1fr;
            }

            .profile-info {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <!-- ================= HEADER ================= -->

    <div class="header">
        <div>
            <h1>Dashboard Mahasiswa</h1>
            <p><?= NamaKampus ?></p>
        </div>

        <div class="header-badge">
            Semester <?= $semester ?>
        </div>
    </div>

    <!-- ================= PROFIL ================= -->

    <div class="profile-layout">
        <!-- Informasi Mahasiswa -->
        <div class="profile-card">
            <h2 class="profile-title">
                Informasi Mahasiswa
            </h2>
            <div class="profile-info">
                <div class="info-item">
                    <div class="label">
                        NIM
                    </div>
                    <div class="value">
                        <?= $nim ?>
                    </div>
                </div>

                <div class="info-item">
                    <div class="label">
                        Nama Lengkap
                    </div>
                    <div class="value">
                        <?= $nama ?>
                    </div>
                </div>

                <div class="info-item">
                    <div class="label">
                        Semester
                    </div>

                    <div class="value">
                        Semester <?= $semester ?>
                    </div>
                </div>

                <div class="info-item">
                    <div class="label">
                        IPK
                    </div>

                    <div class="value">
                        <?= number_format($ipk, 2) ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ringkasan Akademik -->

        <div class="summary">
            <h2>Ringkasan Akademik</h2>
            <div class="summary-item">
                <div class="summary-label">
                    IPK
                </div>

                <div class="summary-value">
                    <?= number_format($ipk, 2) ?>
                </div>
            </div>

            <div class="summary-item">
                <div class="summary-label">
                    Total SKS
                </div>

                <div class="summary-value">
                    <?= $totalSKS ?>
                </div>
            </div>

            <div class="summary-item">
                <div class="summary-label">
                    Status
                </div>

                <?php if ($aktif): ?>
                    <span class="active">
                        MAHASISWA AKTIF
                    </span>
                <?php else: ?>
                    <span class="active">
                        TIDAK AKTIF
                    </span>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- ================= MATA KULIAH ================= -->

    <div class="course-card">
        <h2 class="section-title">
            Daftar Mata Kuliah
        </h2>
        <table>
            <tr>
                <th>No</th>
                <th>Mata Kuliah</th>
                <th>SKS</th>
            </tr>

            <?php
            $no = 1;
            foreach ($mataKuliah as $matkul => $sks):
            ?>
            <tr>
                <td>
                    <span class="course-number">
                        <?= $no++ ?>
                    </span>
                </td>

                <td>
                    <?= $matkul ?>
                </td>

                <td>
                    <?= $sks ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>

        <div class="total">
            <span>
                Total SKS yang Diambil
            </span>

            <span>
                <?= $totalSKS ?> / <?= MAX_SKS ?> SKS
            </span>
        </div>
    </div>

    <!-- ================= DEBUGGING ================= -->

    <div class="debug-card">
        <h2 class="section-title">
            Debugging Tipe Data
        </h2>

        <div class="debug">
            <?php

            echo "NIM       : ";
            var_dump($nim);

            echo "Nama      : ";
            var_dump($nama);

            echo "Semester  : ";
            var_dump($semester);

            echo "IPK       : ";
            var_dump($ipk);

            echo "Aktif     : ";
            var_dump($aktif);

            echo "Mata Kuliah : ";
            var_dump($mataKuliah);

            ?>
        </div>
    </div>

    <!-- ================= FOOTER ================= -->

    <div class="footer">
        Pemrograman Berbasis Web &copy; 2026
    </div>
</div>
</body>
</html>