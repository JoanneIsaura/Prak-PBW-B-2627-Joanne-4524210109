<?php
require_once "koneksi.php";

$result = $koneksi->query(
    "SELECT nim, nama, email, prodi, angkatan, ipk FROM mahasiswa ORDER BY nama ASC"
);

function e($value) {
    return htmlspecialchars((string)$value, ENT_QUOTES, "UTF-8");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Data Mahasiswa</title>
</head>
<body class="bg-slate-100 p-4 md:p-8 font-sans text-slate-800">
    <main class="max-w-6xl mx-auto bg-white p-5 md:p-8 rounded-xl shadow">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 mb-6">
            <div>
                <h1 class="text-2xl font-bold">Data Mahasiswa</h1>
                <p class="text-sm text-slate-500 mt-1">Daftar mahasiswa yang tersimpan di database.</p>
            </div>
            <a href="create.php" class="inline-block text-center bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-lg">
                + Tambah Mahasiswa
            </a>
        </div>

        <?php if (isset($_GET["status"]) && $_GET["status"] === "deleted"): ?>
            <p class="mb-4 rounded-lg bg-green-100 text-green-800 p-3" role="status">Data mahasiswa berhasil dihapus.</p>
        <?php elseif (isset($_GET["status"]) && $_GET["status"] === "saved"): ?>
            <p class="mb-4 rounded-lg bg-green-100 text-green-800 p-3" role="status">Data mahasiswa berhasil disimpan.</p>
        <?php elseif (isset($_GET["status"]) && $_GET["status"] === "updated"): ?>
            <p class="mb-4 rounded-lg bg-green-100 text-green-800 p-3" role="status">Data mahasiswa berhasil diperbarui.</p>
        <?php endif; ?>

        <div class="overflow-x-auto">
            <table class="w-full border-collapse border border-slate-200 text-left">
                <thead class="bg-slate-100">
                    <tr>
                        <th class="border p-3">NIM</th>
                        <th class="border p-3">Nama</th>
                        <th class="border p-3">Email</th>
                        <th class="border p-3">Prodi</th>
                        <th class="border p-3">Angkatan</th>
                        <th class="border p-3">IPK</th>
                        <th class="border p-3 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php if ($result->num_rows === 0): ?>
                    <tr><td colspan="7" class="p-6 text-center text-slate-500">Belum ada data mahasiswa.</td></tr>
                <?php else: ?>
                    <?php while ($data = $result->fetch_assoc()): ?>
                    <tr class="hover:bg-slate-50">
                        <td class="border p-3"><?= e($data["nim"]) ?></td>
                        <td class="border p-3"><?= e($data["nama"]) ?></td>
                        <td class="border p-3"><?= e($data["email"]) ?></td>
                        <td class="border p-3"><?= e($data["prodi"]) ?></td>
                        <td class="border p-3"><?= e($data["angkatan"]) ?></td>
                        <td class="border p-3"><?= e(number_format((float)$data["ipk"], 2)) ?></td>
                        <td class="border p-3 text-center whitespace-nowrap">
                            <a href="edit.php?nim=<?= urlencode($data["nim"]) ?>" class="text-blue-600 hover:underline font-medium">Edit</a>
                            <span class="mx-1 text-slate-300">|</span>
                            <form action="delete.php" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus data mahasiswa ini?');">
                                <input type="hidden" name="nim" value="<?= e($data["nim"]) ?>">
                                <button type="submit" class="text-red-600 hover:underline font-medium">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>