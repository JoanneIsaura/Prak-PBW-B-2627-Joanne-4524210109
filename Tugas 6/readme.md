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
</DIV>

<DIV text align = "center">
  <h2>Tugas 6</h2>

<br>
<table>
  <tr>
    <th>File</th>
    <th>Gambar</th>
  </tr>

  <tr>
    <th>Koneksi</th>
    <th><img src="../Gambar/koneksi.png" width="300">
        <br>
  </tr>
</table>

<p align="justify";><b>Penjelasan:</b><br>
Gambar pertama menunjukkan bahwa program berhasil melakukan koneksi ke server MySQL. Hal ini ditandai dengan munculnya pesan “Koneksi ke server MySQL berhasil!”. Pesan tersebut menunjukkan bahwa konfigurasi koneksi antara program PHP dan database MySQL telah berjalan dengan baik sehingga program dapat terhubung ke database yang digunakan.</p>

<br>
<table>
  <tr>
    <th>File</th>
    <th>Sebelum</th>
    <th>Sesudah</th>
  </tr>

  <tr>
    <th>create</th>
    <th><img src="../Gambar/create.png" width="300">
    <th><img src="../Gambar/create2.png" width="300"></th>
  </tr>
</table>

<p align="justify";><b>Penjelasan:</b><br>
Pada kode sebelum modifikasi, form tambah mahasiswa hanya menggunakan atribut required untuk memastikan setiap kolom diisi, tetapi belum memiliki batasan khusus untuk panjang input, nilai IPK, dan angkatan. Pada kode sesudah modifikasi, ditambahkan validasi melalui atribut HTML, seperti maxlength untuk membatasi panjang karakter, minlength untuk menentukan panjang minimal nama, min dan max untuk membatasi nilai IPK antara 0 sampai 4 serta angkatan antara 2000 sampai 2099. Tipe input angkatan juga diubah dari text menjadi number agar pengguna memasukkan angka. Selain itu, ditambahkan tautan kembali ke halaman utama agar pengguna lebih mudah melakukan navigasi.</p>

<br>
<table>
  <tr>
    <th>File</th>
    <th>Sebelum</th>
    <th>Sesudah</th>
  </tr>
  
  <tr>
    <th>index</th>
    <th><img src="../Gambar/index.png" width="300"></th>
    <th><img src="../Gambar/index2.png" width="300"></th>
  </tr>
</table>

<p align="justify";><b>Penjelasan:</b><br>
Pada kode sebelum modifikasi, index.php hanya menampilkan data mahasiswa dari database berupa NIM, nama, email, program studi, angkatan, IPK, serta aksi edit dan hapus. Pada kode sesudah modifikasi, ditambahkan kolom Keterangan IPK yang menampilkan status akademik berdasarkan nilai IPK, yaitu Sangat Memuaskan, Memuaskan, atau Perlu Peningkatan. Selain itu, ditambahkan kondisi untuk menampilkan pesan apabila belum ada data mahasiswa dan fungsi htmlspecialchars() untuk membantu mencegah karakter khusus pada data ditampilkan sebagai kode HTML. Parameter NIM pada tautan edit dan hapus juga menggunakan urlencode() agar lebih aman saat dimasukkan ke URL.</p>

<br>
<table>
  <tr>
    <th>File</th>
    <th>Sebelum</th>
    <th>Sesudah</th>
  </tr>

  <tr>
    <th>update</th>
    <th><img src="../Gambar/update.png" width="300">
    <th><img src="../Gambar/index2.png" width="300"></th>
  </tr>
</table>

<p align="justify";><b>Penjelasan:</b><br>
</p>

<br>
<table>
  <tr>
    <th>File</th>
    <th>Sebelum</th>
    <th>Sesudah</th>
  </tr>
  
  <tr>
    <th>edit</th>
    <th><img src="../Gambar/edit.png" width="300"></th>
    <th><img src="../Gambar/edit2.png" width="300"></th>
  </tr>
</table>

<p align="justify";><b>Penjelasan:</b><br>
</p>

<br>
<table>
  <tr>
    <th>File</th>
    <th>Sebelum</th>
    <th>Sesudah</th>
  </tr>

  <tr>
    <th>delete</th>
    <th><img src="../Gambar/delete.png" width="300">
    <th><img src="../Gambar/delete1.png" width="300"><br>
    <img src="../Gambar/delete2.png" width="300"></th>
  </tr>
</table>

<p align="justify";><b>Penjelasan:</b><br>
</p>

<br>
<table>
  <tr>
    <th>File</th>
    <th>Sebelum</th>
    <th>Sesudah</th>
  </tr>
  
  <tr>
    <th>store</th>
    <th><img src="../Gambar/store.png" width="300"></th>
    <th><img src="../Gambar/index2.png" width="300"></th>
  </tr>
</table>

<p align="justify";><b>Penjelasan:</b><br>
</p>

<br>
<table>
  <p align="justify";><b>Penjelasan singkat untuk lima bagian kode yang menurut saya paling penting:</b></p>
  
  <tr>
    <td><br>
      <p align="justify";></p></td>
  </tr>
  
  <tr>
    <td><br>
      <p align="justify";></p></td>
  </tr>

  <tr>
    <td><br>
      <p align="justify";></p></td>
  </tr>

  <tr>
    <td><br>
      <p align="justify";></p></td>
  </tr>

  <tr>
    <td><br>
      <p align="justify";></p></td>
  </tr>
</table>
