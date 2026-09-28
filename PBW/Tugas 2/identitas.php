<?php

interface Identitas
{
    public function ringkasan(): string;
}

class Mahasiswa implements Identitas
{
    private string $nim;
    private string $nama;
    private string $prodi; // MODIFIKASI 1
    protected float $ipk;

    public function __construct(
        string $nim,
        string $nama,
        string $prodi,
        float $ipk
    ) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->setIpk($ipk);
    }

    public function setIpk(float $ipk): void
    {
        if ($ipk < 0 || $ipk > 4) {
            throw new InvalidArgumentException(
                'IPK harus 0 sampai 4.'
            );
        }

        $this->ipk = $ipk;
    }

    public function getIpk(): float
    {
        return $this->ipk;
    }

    // MODIFIKASI 2
    public function statusIpk(): string
    {
        if ($this->ipk >= 3.50) {
            return 'Sangat Memuaskan';
        }

        if ($this->ipk >= 3.00) {
            return 'Memuaskan';
        }

        return 'Perlu Peningkatan';
    }

    public function ringkasan(): string
    {
        return $this->nim .
            ' - ' .
            $this->nama .
            ' - ' .
            $this->prodi .
            ' - IPK: ' .
            $this->ipk;
    }
}

$mhs = new Mahasiswa(
    '4524210126',
    'Rihhadatul Aisy Septifani Zain',
    'Teknik Informatika',
    3.82
);

echo '<h2>Identitas Mahasiswa</h2>';

echo '<p>NIM: 4524210126</p>';
echo '<p>Nama: Rihhadatul Aisy Septifani Zain</p>';
echo '<p>Prodi: Teknik Informatika</p>';
echo '<p>IPK: ' . $mhs->getIpk() . '</p>';
echo '<p>Status IPK: ' . $mhs->statusIpk() . '</p>';

echo '<p>Ringkasan: ' . $mhs->ringkasan() . '</p>';
?>