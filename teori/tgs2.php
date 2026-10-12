<?php

class Produk {
    public $nama;
    public $harga;
    public $stok;

    public function __construct($nama, $harga, $stok) {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    public function tampilkanProduk() {
        echo "Nama Produk: " . $this->nama . "<br>";
        echo "Harga: Rp" . number_format($this->harga, 0, ',', '.') . "<br>";
        echo "Stok: " . $this->stok . "<br><br>";
    }
}

class Pengguna {
    public $nama;
    public $email;

    public function __construct($nama, $email) {
        $this->nama = $nama;
        $this->email = $email;
    }

    public function tampilkanPengguna() {
        echo "Nama Pengguna: " . $this->nama . "<br>";
        echo "Email: " . $this->email . "<br><br>";
    }
}

class Keranjang {
    public $daftarProduk = [];

    public function tambahProduk($produk, $jumlah) {
        if ($jumlah > 0 && $jumlah <= $produk->stok) {
            $this->daftarProduk[] = [
                'produk' => $produk,
                'jumlah' => $jumlah
            ];

            $produk->stok -= $jumlah;

            echo $produk->nama .
                " berhasil ditambahkan ke keranjang.<br>";
        } else {
            echo "Jumlah tidak valid atau stok tidak cukup.<br>";
        }
    }

    public function hitungTotal() {
        $total = 0;

        foreach ($this->daftarProduk as $item) {
            $total += $item['produk']->harga * $item['jumlah'];
        }

        return $total;
    }

    public function tampilkanKeranjang() {
        echo "<h3>Isi Keranjang</h3>";

        foreach ($this->daftarProduk as $item) {
            $produk = $item['produk'];
            $jumlah = $item['jumlah'];
            $subtotal = $produk->harga * $jumlah;

            echo $produk->nama . " x " . $jumlah .
                " = Rp" .
                number_format($subtotal, 0, ',', '.') .
                "<br>";
        }

        echo "<b>Total: Rp" .
            number_format($this->hitungTotal(), 0, ',', '.') .
            "</b><br><br>";
    }
}

class Pesanan {
    public $pengguna;
    public $keranjang;
    public $status;

    public function __construct($pengguna, $keranjang) {
        $this->pengguna = $pengguna;
        $this->keranjang = $keranjang;
        $this->status = "Menunggu Pembayaran";
    }

    public function buatPesanan() {
        echo "<h3>Detail Pesanan</h3>";
        echo "Pemesan: " . $this->pengguna->nama . "<br>";
        echo "Total Pesanan: Rp" .
            number_format(
                $this->keranjang->hitungTotal(),
                0,
                ',',
                '.'
            ) . "<br>";
        echo "Status: " . $this->status . "<br><br>";
    }
}

class Pembayaran {
    public $pesanan;

    public function __construct($pesanan) {
        $this->pesanan = $pesanan;
    }

    public function bayar($metode) {
        if ($this->pesanan->status == "Menunggu Pembayaran") {
            $this->pesanan->status = "Dibayar";

            echo "<h3>Pembayaran Berhasil</h3>";
            echo "Metode Pembayaran: " . $metode . "<br>";
            echo "Jumlah Pembayaran: Rp" .
                number_format(
                    $this->pesanan->keranjang->hitungTotal(),
                    0,
                    ',',
                    '.'
                ) . "<br>";
            echo "Status: " . $this->pesanan->status . "<br>";
        } else {
            echo "Pesanan sudah dibayar.<br>";
        }
    }
}

echo "<h2>STUDI KASUS E-COMMERCE</h2>";

$produk1 = new Produk("Laptop", 7500000, 10);
$produk2 = new Produk("Mouse", 150000, 20);

echo "<h3>Daftar Produk</h3>";
$produk1->tampilkanProduk();
$produk2->tampilkanProduk();

$pengguna1 = new Pengguna(
    "Andi",
    "andi@email.com"
);

echo "<h3>Data Pengguna</h3>";
$pengguna1->tampilkanPengguna();

$keranjang1 = new Keranjang();

$keranjang1->tambahProduk($produk1, 1);
$keranjang1->tambahProduk($produk2, 2);

$keranjang1->tampilkanKeranjang();

$pesanan1 = new Pesanan(
    $pengguna1,
    $keranjang1
);

$pesanan1->buatPesanan();

$pembayaran1 = new Pembayaran($pesanan1);

$pembayaran1->bayar("Transfer Bank");
?>