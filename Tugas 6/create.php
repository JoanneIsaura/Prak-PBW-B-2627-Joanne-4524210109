<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Tambah Mahasiswa</title>
</head>
<body class="bg-slate-100 p-4 md:p-8 font-sans text-slate-800">
    <main class="max-w-xl mx-auto bg-white p-6 md:p-8 rounded-xl shadow">
        <h1 class="text-2xl font-bold mb-1">Tambah Mahasiswa</h1>
        <p class="text-slate-500 text-sm mb-6">Isi semua data dengan benar.</p>
        <form action="store.php" method="POST" class="flex flex-col gap-2">
            <label for="nim" class="font-semibold text-sm">NIM</label>
            <input id="nim" name="nim" type="text" maxlength="20" required class="p-2 border rounded-lg" placeholder="Contoh: 23123456">

            <label for="nama" class="font-semibold text-sm mt-2">Nama</label>
            <input id="nama" name="nama" type="text" maxlength="100" required class="p-2 border rounded-lg" placeholder="Nama lengkap">

            <label for="email" class="font-semibold text-sm mt-2">Email</label>
            <input id="email" name="email" type="email" maxlength="120" required class="p-2 border rounded-lg" placeholder="nama@email.com">

            <label for="prodi" class="font-semibold text-sm mt-2">Program Studi</label>
            <input id="prodi" name="prodi" type="text" maxlength="100" required class="p-2 border rounded-lg" placeholder="Contoh: Informatika">

            <label for="angkatan" class="font-semibold text-sm mt-2">Angkatan</label>
            <input id="angkatan" name="angkatan" type="number" min="1900" max="2100" required class="p-2 border rounded-lg" placeholder="Contoh: 2023">

            <label for="ipk" class="font-semibold text-sm mt-2">IPK (0,00–4,00)</label>
            <input id="ipk" name="ipk" type="number" min="0" max="4" step="0.01" required class="p-2 border rounded-lg" placeholder="Contoh: 3.75">

            <div class="flex gap-3 mt-5">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-lg">Simpan</button>
                <a href="index.php" class="bg-slate-200 hover:bg-slate-300 px-4 py-2 rounded-lg">Batal</a>
            </div>
        </form>
    </main>
</body>
</html>