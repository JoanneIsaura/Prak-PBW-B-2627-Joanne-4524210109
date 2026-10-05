<div text align = "center">
  <h1>LAPORAN PRAKTIKUM <br>
  PRAK. PEMROGRAMAN BERBASIS WEB</h1>

<p><b>Dosen Pengampu: </b><br>
Ari Wibowo, S.Kom., M.Kom., C. Pro</p>

<br>
<br>

<img src="../Gambar/logo.png" width="300">

<br>
<br>
<br>

<p><b>Disusun Oleh:</b><br>
Joanne Trixie Isaura <br> 4524210109</p>

<br>
<br>

<h1>PROGRAM STUDI TEKNIK INFORMATIKA<br>
FAKULTAS TEKNIK <br>
UNIVERSITAS PANCASILA<br>
2026</h1>
</div>

<br>
<DIV text align = "center">
  <h2>Tugas 3</h2>
</DIV>

<table>
  <tr>
    <th>File</th>
    <th>Sebelum</th>
    <th>Sesudah</th>
  </tr>

  <tr>
    <th>contoh 2</th>
    <th><img src="../Gambar/contoh2.png" width="300">
        <br>
        <p></p></th>
    <th><img src="../Gambar/tgs3.png" width="300"></th>
  </tr>
</table>

<p align="justify";><b>Penjelasan:</b><br>
Pada kode sebelum, program digunakan untuk membuat database akademik serta beberapa tabel utama seperti mahasiswa, dosen, mata_kuliah, krs, dan mk_krs yang dilengkapi dengan primary key, unique, dan foreign key untuk menghubungkan tabel. Sedangkan pada kode sesudah, struktur pembuatan database dan tabel yang sudah ada tetap dipertahankan, tetapi tabel krs dan mk_krs digantikan dengan tabel kelas yang memiliki kolom id, nama_kelas, dan semester. Selain itu, kode sesudah menambahkan proses pengecekan kolom no_tlp pada tabel mahasiswa menggunakan SHOW COLUMNS; jika kolom tersebut belum ada, program akan menambahkannya menggunakan ALTER TABLE, sedangkan jika sudah ada maka program akan memberikan informasi bahwa kolom tersebut sudah tersedia. Kode sesudah juga menambahkan foreach untuk menjalankan seluruh query pembuatan tabel dan menampilkan status berhasil atau gagal untuk setiap tabel, serta menutup koneksi dengan mysqli_close($koneksi).</p>
