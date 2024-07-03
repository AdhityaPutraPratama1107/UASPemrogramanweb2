# UASPemrogramanweb2

Login
username/NIM : 211011401683  
Password : adhitya

#koneksi.php
$servername, $username, $password, $dbname: Variabel-variabel ini menyimpan detail yang diperlukan untuk menghubungkan ke database.
new mysqli($servername, $username, $password, $dbname): Fungsi ini membuat koneksi baru ke database menggunakan detail yang telah didefinisikan.
if ($conn->connect_error): Blok ini memeriksa apakah ada kesalahan saat mencoba menghubungkan ke database dan menghentikan eksekusi jika terjadi kesalahan.

#index.php
include 'koneksi.php';: Baris ini menyertakan file koneksi.php sehingga koneksi ke database dapat digunakan.
$sql = "SELECT * FROM data";: Mendefinisikan query SQL untuk mengambil semua data dari tabel data.
$result = $conn->query($sql);: Menjalankan query tersebut dan menyimpan hasilnya dalam variabel $result.
if ($result->num_rows > 0) { ... }: Memeriksa apakah ada baris hasil yang dikembalikan dari query.
while($row = $result->fetch_assoc()) { ... }: Mengambil setiap baris hasil sebagai array asosiatif dan menampilkan nilai-nilai dari kolom id dan name.
echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";: Menampilkan id dan nama dari setiap baris hasil.
else { echo "0 results"; }: Jika tidak ada hasil, menampilkan pesan "0 results".
conn->close();: Menutup koneksi ke database setelah selesai digunakan.

#dashboaruser.php
session_start(); : Memulai sesi PHP.
Mengecek apakah pengguna telah login dan perannya adalah 'user'. Jika tidak, pengguna diarahkan ke index.php.
require 'koneksi.php'; : Menginkludkan file koneksi.php untuk membuat koneksi ke database.
Mengambil semua data dari tabel teams.
Menyertakan struktur dasar dokumen HTML dengan judul "User Dashboard"
Menyertakan file menu1.php untuk menampilkan menu di dashboard.
Menampilkan pesan selamat datang dan deskripsi dashboard, serta tautan untuk logout.
Menyediakan tombol untuk mengekspor data dan menambahkan tim.
Menampilkan data dari database dalam bentuk tabel yang interaktif dan bisa difilter menggunakan DataTables.
Menggunakan jQuery, Bootstrap, dan DataTables untuk menambah fungsionalitas pada halaman.
Menggunakan jQuery, Bootstrap, dan DataTables untuk menambah fungsionalitas pada halaman.

#add_tim.php
session_start(); : Memulai sesi PHP untuk mengakses variabel sesi.
Mengecek apakah pengguna telah login dan apakah perannya adalah 'user'. Jika tidak, pengguna akan diarahkan ke halaman login (index.php)
require 'koneksi.php'; : Menyertakan file koneksi.php untuk koneksi ke database.
Jika metode permintaan adalah POST, skrip akan mengambil nilai dari form input (team, menang, seri, kalah, poin).
Menyimpan nama pengguna yang login sebagai PIC.
Menyusun dan menjalankan pernyataan SQL untuk memasukkan data baru ke tabel teams.
Jika berhasil, pengguna akan diarahkan ke dashboarduser.php, jika tidak, pesan kesalahan akan ditampilkan.

#delet_tim
session_start();: Memulai sesi PHP untuk mengakses variabel sesi.
Mengecek apakah pengguna telah login dan apakah perannya adalah 'user'. Jika tidak, pengguna akan diarahkan ke halaman login (index.php).
require 'koneksi.php';: Menyertakan file koneksi.php untuk koneksi ke database.
Mengecek apakah ada parameter id yang dikirim melalui URL ($_GET['id']).
Menyimpan nilai id yang didapat dari parameter URL.
Menyiapkan pernyataan SQL untuk menghapus data dari tabel teams berdasarkan id dengan menggunakan statement yang dipreparasi untuk keamanan.
Mengikat parameter id ke statement SQL menggunakan bind_param.
Menjalankan statement SQL untuk menghapus data. Jika berhasil, pengguna akan diarahkan ke halaman dashboarduser.php, jika tidak, pesan kesalahan akan ditampilkan.
Menutup statement SQL yang dipreparasi ($stmt->close()).
Menutup koneksi database ($conn->close()).

#edit_tim
session_start();: Memulai sesi PHP untuk mengakses variabel sesi.
Mengecek apakah pengguna telah login dan apakah perannya adalah 'user'. Jika tidak, pengguna akan diarahkan ke halaman login (index.php).
require 'koneksi.php';: Menyertakan file koneksi.php untuk koneksi ke database.
Mengecek apakah parameter id tersedia di URL ($_GET['id']).
Menyiapkan dan menjalankan pernyataan SQL untuk mengambil data tim berdasarkan id dengan menggunakan statement yang dipreparasi.
Mengambil hasil query dan menyimpannya dalam variabel $row. Jika tidak ada data yang ditemukan, menampilkan pesan "No record found" dan menghentikan skrip.
Jika metode permintaan adalah POST, skrip akan mengambil nilai dari form input (id, team, menang, seri, kalah, poin).
Menyiapkan dan menjalankan pernyataan SQL untuk memperbarui data tim berdasarkan id dengan menggunakan statement yang dipreparasi.
Mengikat parameter input ke statement SQL menggunakan bind_param.
Menjalankan statement SQL untuk memperbarui data. Jika berhasil, pengguna akan diarahkan ke halaman dashboarduser.php, jika tidak, pesan kesalahan akan ditampilkan.
Menutup statement SQL yang dipreparasi ($stmt->close()).
Menutup koneksi database ($conn->close()).

