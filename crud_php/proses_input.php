<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
    $nama = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $pengirim = $_POST['pengirim'];
    $tgl_masuk = $_POST['tgl_masuk_gudang'];
    $satuan = $_POST['satuan'];
    $kategori = $_POST['kategori'];
    $stock = $_POST['stock'];
    $foto = $_POST['foto'];

        $sql = mysqli_query($koneksi, "INSERT INTO `gudang` (`nama_barang`, `harga`, `pengirim`, `tgl_masuk_gudang`, `satuan`, `kategori`, `stock`,`foto`) 
        VALUES ('$nama', '$harga', '$pengirim', '$tgl_masuk', '$satuan', '$kategori', '$stock','$foto')") or die(mysqli_error($koneksi));
        
        if($sql){
            echo '<script>alert("Berhasil menambahkan data."); document.location="daftar_barang.php";</script>';
        }else{
            echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
        }
?>
