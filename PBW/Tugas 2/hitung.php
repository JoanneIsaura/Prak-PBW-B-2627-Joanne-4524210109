<?php

interface BisaDihitung
{
    public function hargaAkhir(): float;
}

class Produk implements BisaDihitung
{
    protected string $nama;
    protected float $harga;

    public function __construct(
        string $nama,
        float $harga
    ) {
        $this->nama = $nama;
        $this->harga = $harga;
    }

    public function hargaAkhir(): float
    {
        return $this->harga;
    }

    public function getNama(): string
    {
        return $this->nama;
    }
}

class ProdukDiskon extends Produk
{
    private float $diskon;

    public function __construct(
        string $nama,
        float $harga,
        float $diskon
    ) {
        parent::__construct($nama, $harga);
        $this->diskon = $diskon;
    }

    public function hargaAkhir(): float
    {
        return $this->harga *
            (1 - $this->diskon / 100);
    }
}

// MODIFIKASI 1
class ProdukPajak extends Produk
{
    private float $pajak;

    public function __construct(
        string $nama,
        float $harga,
        float $pajak
    ) {
        parent::__construct($nama, $harga);
        $this->pajak = $pajak;
    }

    // MODIFIKASI 2
    public function hargaAkhir(): float
    {
        return $this->harga *
            (1 + $this->pajak / 100);
    }
}

$daftar = [
    new Produk('Keyboard', 250000),
    new ProdukDiskon('Mouse', 150000, 10),
    new ProdukPajak('Monitor', 2000000, 11)
];

echo '<h2>Daftar Produk</h2>';

foreach ($daftar as $produk) {

    echo $produk->getNama()
        . ' - Rp '
        . number_format(
            $produk->hargaAkhir(),
            0,
            ',',
            '.'
        )
        . '<br>';
}
?>