
<?php
require_once __DIR__ . "/../koneksi.php";

class ProdukModel
{
    private $koneksi;

    public function __construct()
    {
        global $koneksi;
        $this->koneksi = $koneksi;
    }

    // Menampilkan semua produk
    public function getAll()
    {
        $query = mysqli_query(
            $this->koneksi,
            "SELECT * FROM produk ORDER BY id DESC"
        );

        if (!$query) {
            die("Query gagal: " . mysqli_error($this->koneksi));
        }

        return mysqli_fetch_all($query, MYSQLI_ASSOC);
    }

    // Mengambil produk berdasarkan ID
    public function getById($id)
    {
        $stmt = mysqli_prepare(
            $this->koneksi,
            "SELECT * FROM produk WHERE id = ?"
        );

        if (!$stmt) {
            die("Query gagal: " . mysqli_error($this->koneksi));
        }

        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        return mysqli_fetch_assoc($result);
    }

    // Menambahkan produk
    public function tambah($nama, $harga, $stok)
    {
        $stmt = mysqli_prepare(
            $this->koneksi,
            "INSERT INTO produk (nama_produk, harga, stok)
            VALUES (?, ?, ?)"
        );

        if (!$stmt) {
            die("Query gagal: " . mysqli_error($this->koneksi));
        }

        mysqli_stmt_bind_param(
            $stmt,
            "sdi",
            $nama,
            $harga,
            $stok
        );

        return mysqli_stmt_execute($stmt);
    }

    // Mengubah produk
    public function update($id, $nama, $harga, $stok)
    {
        $stmt = mysqli_prepare(
            $this->koneksi,
            "UPDATE produk
            SET nama_produk = ?, harga = ?, stok = ?
            WHERE id = ?"
        );

        if (!$stmt) {
            die("Query gagal: " . mysqli_error($this->koneksi));
        }

        mysqli_stmt_bind_param(
            $stmt,
            "sdii",
            $nama,
            $harga,
            $stok,
            $id
        );

        return mysqli_stmt_execute($stmt);
    }
}
?>