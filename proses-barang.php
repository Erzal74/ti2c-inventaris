<?php
include("db.php");
// cek apakah tombol Submit sudah diklik atau belum?
if(isset($_POST['Submit'])){
    // ambil data dari formulir
    $Id = $_POST['Id']; // Ubah $Nama menjadi $Id
    $Merk = $_POST['Merk'];
    $Stok = $_POST['Stok'];
    $Harga = $_POST['Harga'];
    // buat query
    $sql = "INSERT INTO barang (Id, Merk, Stok, Harga) VALUES ('$Id', '$Merk', '$Stok', '$Harga')";
    $query = mysqli_query($db, $sql);
    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
exit();
?>
