<?php
//include file config.php
include('koneksi.php');


if(isset($_GET['kode_barang'])){

	$kode = $_GET['kode_barang'];
	$cek = mysqli_query($koneksi, "SELECT * FROM gudang WHERE kode_barang='$kode'") or die(mysqli_error($koneksi));
	
	//jika query menghasilkan nilai > 0 maka eksekusi script di bawah
	if(mysqli_num_rows($cek) > 0){
		//query ke database DELETE untuk menghapus data dengan kondisi nipd=$nipd
		$del = mysqli_query($koneksi, "DELETE FROM gudang WHERE kode_barang='$kode'") or die(mysqli_error($koneksi));
		if($del){
			echo '<script>alert("Berhasil menghapus data."); document.location="daftar_barang.php";</script>';
		}else{
			echo '<script>alert("Gagal menghapus data."); document.location="daftar_barang.php";</script>';
		}
	}else{
		echo '<script>alert("nipd tidak ditemukan di database."); document.location="daftar_barang.php";</script>';
	}
}else{
	echo '<script>alert("nipd tidak ditemukan di database."); document.location="daftar_barang.php";</script>';
}

?>