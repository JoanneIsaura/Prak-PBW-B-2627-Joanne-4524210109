<?php
// kalkulator.php

$hasil = null;
$pesan = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = (float) ($_POST['a'] ?? 0);
    $b = (float) ($_POST['b'] ?? 0);
    $operator = $_POST['operator'] ?? '+';

    switch ($operator) {
        case '+':
            $hasil = $a + $b;
            break;

        case '-':
            $hasil = $a - $b;
            break;

        case '*':
            $hasil = $a * $b;
            break;

        case '/':
            if ($b == 0) {
                $pesan = 'Pembagian dengan nol tidak diperbolehkan.';
            } else {
                $hasil = $a / $b;
            }
            break;

        // MODIFIKASI 1: operator modulus
        case '%':
            if ($b == 0) {
                $pesan = 'Modulus dengan nol tidak diperbolehkan.';
            } else {
                $hasil = $a % $b;
            }
            break;

        default:
            $pesan = 'Operator tidak valid.';
    }
}
?>

<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Kalkulator</title>

    <!-- MODIFIKASI 2: styling -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 40px;
        }

        .container {
            width: 400px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
        }

        input, select, button {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        button {
            background-color: #333;
            color: white;
            border: none;
            cursor: pointer;
        }

        .hasil {
            margin-top: 15px;
            padding: 10px;
            background-color: #eee;
        }
    </style>
</head>

<body>
<div class="container">

    <h1>Kalkulator Sederhana</h1>

    <form method="post">

        <input
            type="number"
            step="any"
            name="a"
            placeholder="Angka pertama"
            required
        >

        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>
        </select>

        <input
            type="number"
            step="any"
            name="b"
            placeholder="Angka kedua"
            required
        >

        <button type="submit">Hitung</button>

    </form>

    <?php if ($pesan !== ''): ?>
        <div class="hasil">
            <?= htmlspecialchars($pesan) ?>
        </div>
    <?php elseif ($hasil !== null): ?>
        <div class="hasil">
            <strong>Hasil: <?= htmlspecialchars((string)$hasil) ?></strong>
        </div>
    <?php endif; ?>
</div>
</body>
</html>