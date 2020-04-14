<?php 
include('koneksi.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
 
</head>


<body>
    <h1>Daftar Barang</h1>
	<a href="form_pengisian.php" style="text-decoration: none;">Tambah Data</a>
    <table border="2" cellpadding="7" cellspacing="0">
        <th>No</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Pengirim</th>
        <th>Tanggal Masuk Barang</th>
        <th>Satuan</th>
        <th>Kategori</th>
		<th>Stock</th>
        <th>Foto</th>
		<th>Action</th>
    <?php
				//query ke database SELECT tabel mahasiswa urut berdasarkan id yang paling besar
				$sql = mysqli_query($koneksi, "SELECT * FROM gudang") or die(mysqli_error($koneksi));
				//jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
				if(mysqli_num_rows($sql) > 0){
					//membuat variabel $no untuk menyimpan nomor urut
					$no = 1;
					//melakukan perulangan while dengan dari dari query $sql
					while($data = mysqli_fetch_assoc($sql)){
						//menampilkan data perulangan
						echo "<tr>";
						echo "<td>".$no."</td>";
						echo "<td>".$data['kode_barang']."</td>";
    					echo "<td>".$data['nama_barang']."</td>";
    					echo "<td>".$data['harga']."</td>";
    					echo "<td>".$data['pengirim']."</td>";
    					echo "<td>".$data['tgl_masuk_gudang']."</td>";
						echo "<td>".$data['satuan']."</td>";
						echo "<td>".$data['kategori']."</td>";
						echo "<td>".$data['stock']."</td>";
						echo "<td><img src='".$data['foto']."' width='100' height='100'></td>";
						echo "<td><a href='form_ubah.php?kode_barang=".$data['kode_barang']."style='text-decoration: none;''>Ubah</a>
											<a href='proses_hapus.php?kode_barang=".$data['kode_barang']."style='text-decoration: none;'''>Hapus</a>
								</td>";
    					echo "</tr>";

						$no++;
					}
				//jika query menghasilkan nilai 0
				}else{
					echo '
					<tr>
						<td colspan="11">Tidak ada data.</td>
					</tr>
					';
				}
				?>
    </table>
</body>
</html>