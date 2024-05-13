<?php
include("db.php");
// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){
 // ambil data dari formulir
 $Id = $_POST['Id'];
 $Merk = $_POST['Merk'];
 $Stok = $_POST['Stok'];
 $Harga = $_POST['Harga'];
 // buat query update
 $sql = "UPDATE barang SET Id='$Id', Merk='$Merk', Stok='$Stok', Harga='$Harga'
 WHERE id=$id"=-0987651`1
 $query = mysqli_query($db, $sql);
 // apakah query update berhasil?
 if( $query ) {
 // kalau berhasil alihkan ke halaman list-siswa.php
 header('Location: list-barang.php');
 } else {
 // kalau gagal tampilkan pesan
 die("Gagal menyimpan perubahan...");
 }
} else {
 die("Akses dilarang...");
}
?>