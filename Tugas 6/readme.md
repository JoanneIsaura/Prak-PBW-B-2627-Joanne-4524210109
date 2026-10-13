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
Pada kode sebelum modifikasi, terdapat kesalahan penulisan nama file koneksi, yaitu koneksi.p0hp, serta kondisi if (query) yang seharusnya memeriksa variabel $query. Query pembaruan juga langsung menggabungkan input pengguna ke perintah SQL dan belum memiliki validasi data. Pada kode sesudah modifikasi, nama file koneksi dan kondisi pemeriksaan diperbaiki, kemudian ditambahkan validasi untuk memastikan semua kolom terisi, email valid, angkatan sesuai rentang yang ditentukan, dan IPK berada antara 0 sampai 4. Query pembaruan menggunakan prepared statement sehingga input diproses sebagai parameter. Kode juga menampilkan pesan ketika pembaruan berhasil atau gagal, lalu mengarahkan pengguna kembali ke halaman utama setelah proses selesai.</p>

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
Pada kode sebelum modifikasi, data mahasiswa dicari berdasarkan NIM menggunakan query SQL yang langsung menggabungkan nilai dari URL. Kode tersebut juga langsung menampilkan data dari database pada judul dan atribut value form tanpa pengamanan output. Pada kode sesudah modifikasi, pencarian data menggunakan prepared statement agar NIM diproses sebagai parameter, ditambahkan pemeriksaan jika NIM kosong atau data tidak ditemukan, serta digunakan fungsi htmlspecialchars() melalui fungsi bantuan aman() untuk mengamankan data yang ditampilkan. Input NIM juga dibuat readonly agar tidak dapat diubah melalui form. Selain itu, validasi panjang nama, format email, rentang angkatan, dan nilai IPK ditambahkan agar proses pengubahan data lebih terkontrol.</p>

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
Pada kode sebelum modifikasi, terdapat kesalahan penulisan fungsi mysqlli_query() yang seharusnya menggunakan fungsi MySQLi yang benar. Query penghapusan juga langsung menggabungkan NIM dari URL ke dalam perintah SQL dan hanya memeriksa apakah query berhasil dijalankan. Pada kode sesudah modifikasi, proses penghapusan menggunakan mysqli_prepare() dan mysqli_stmt_bind_param() untuk memproses NIM sebagai parameter. Ditambahkan juga pemeriksaan apabila NIM tidak tersedia serta pengecekan jumlah baris yang terhapus menggunakan mysqli_stmt_affected_rows(), sehingga program dapat membedakan antara data yang berhasil dihapus dan data yang tidak ditemukan. Dengan perubahan tersebut, proses penghapusan menjadi lebih aman dan memberikan informasi yang lebih jelas kepada pengguna.</p>

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
Pada kode sebelum modifikasi, proses penyimpanan data memiliki kesalahan pada penggunaan variabel $server yang seharusnya $_SERVER dan fungsi mysql_query() yang tidak sesuai dengan koneksi MySQLi. Kode sebelumnya juga langsung menggabungkan input pengguna ke dalam query SQL tanpa validasi yang memadai. Pada kode sesudah modifikasi, diperbaiki pemeriksaan metode pengiriman form, ditambahkan validasi untuk memastikan kolom terisi, email valid, angkatan berada dalam rentang yang ditentukan, dan IPK antara 0 sampai 4. Proses penyimpanan juga menggunakan mysqli_prepare() dan parameter agar input tidak langsung digabungkan ke query SQL. Dengan demikian, proses penyimpanan menjadi lebih terstruktur dan lebih aman.</p>

<br>
<table>
  <p align="justify";><b>Penjelasan singkat untuk lima bagian kode yang menurut saya paling penting:</b></p>
  
  <tr>
    <td>1. Menghubungkan program dengan database<br>
      <p align="justify";>digunakan untuk memasukkan file koneksi database ke dalam program. Dengan adanya koneksi tersebut, PHP dapat menjalankan perintah untuk mengambil, menyimpan, mengubah, dan menghapus data mahasiswa.</p></td>
  </tr>
  
  <tr>
    <td>2. Mengambil data dari tabel mahasiswa<br>
      <p align="justify";>Kode ini menjalankan perintah SQL SELECT untuk mengambil seluruh data dari tabel mahasiswa. Data tersebut kemudian ditampilkan pada halaman utama menggunakan perulangan.</p></td>
  </tr>

  <tr>
    <td>3. Validasi input IPK<br>
      <p align="justify";>Kode ini memastikan bahwa IPK yang dimasukkan berupa angka dan berada pada rentang 0 sampai 4. Validasi dilakukan di sisi server agar data yang tidak sesuai tidak langsung disimpan ke database.</p></td>
  </tr>

  <tr>
    <td>4. Menyimpan data menggunakan prepared statement<br>
      <p align="justify";>Kode ini menyiapkan perintah SQL untuk menyimpan data mahasiswa dengan parameter. Penggunaan prepared statement membantu mencegah SQL injection karena input pengguna diproses sebagai nilai parameter, bukan digabungkan langsung ke perintah SQL.</p></td>
  </tr>

  <tr>
    <td>5. Menentukan keterangan IPK dengan percabangan<br>
      <p align="justify";>Kode ini menggunakan percabangan if, elseif, dan else untuk menentukan keterangan akademik berdasarkan IPK mahasiswa. Fitur ini membuat halaman daftar mahasiswa lebih informatif karena keterangan akademik dapat ditampilkan secara otomatis.</p></td>
  </tr>
</table>
