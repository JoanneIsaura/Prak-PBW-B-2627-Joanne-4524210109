<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas 5</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 450px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 3px 10px #cccccc;
        }

        h2 {
            text-align: center;
            color: #2457a7;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #2457a7;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #173d78;
        }
    </style>
</head>

<body>
<div class="container">
    <h2>Form Data Mahasiswa</h2>

    <form action="simpan.php" method="post">
        NIM:
        <input type="text" name="nim"
            pattern="[0-9]+" title="NIM harus berupa angka"
            required>

        Nama:
        <input type="text" name="nama" maxlength="100" required>

        Email:
        <input type="email" name="email" required>

        Prodi:
        <select name="prodi" required>
            <option value="">-- Pilih Program Studi --</option>
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Teknik Industri">Teknik Industri</option>
        </select>

        Angkatan:
        <input type="number" name="angkatan"
            min="1900" max="<?php echo date('Y'); ?>"
            required>

        IPK:
        <input type="number" name="ipk"
            min="0" max="4" step="0.01" required>

        <button type="submit">Simpan Data</button>
    </form>
</div>
</body>
</html>