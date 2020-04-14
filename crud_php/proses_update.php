<?php
            include "koneksi.php";
            $kode = $_POST['kode_barang'];
            $nama = $_POST['nama_barang'];
            $harga = $_POST['harga'];
            $pengirim = $_POST['pengirim'];
            $tgl_masuk = $_POST['tgl_masuk_gudang'];
            $satuan = $_POST['satuan'];
            $kategori = $_POST['kategori'];
            $stock = $_POST['stock'];
            $foto = $_POST['foto'];
			
			$sql = mysqli_query($koneksi, "UPDATE `gudang` SET `nama_barang` = '$nama', `harga` = '$harga', `pengirim` = '$pengirim', `tgl_masuk_gudang` = '$tgl_masuk', 
            `satuan` = '$satuan', `kategori` = '$kategori' ,`stock` = '$stock', `foto` = '$foto'   WHERE `gudang`.`kode_barang` = $kode") or die(mysqli_error($koneksi));
			
			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="daftar_barang.php";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
        
        
        ?>