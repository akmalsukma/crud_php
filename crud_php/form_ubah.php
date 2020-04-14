<?php 
include('koneksi.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Barang</title>
</head>
<style>
    div{
        border: 2px solid black;
        width: 30%;
        height: 450px;
        margin-left: 36%;
    }
</style>
<body>
<?php
        $kode = $_GET['kode_barang'];
        $select = mysqli_query($koneksi, "SELECT * FROM gudang WHERE kode_barang='$kode'") or die(mysqli_error($koneksi));
        
        $data = mysqli_fetch_assoc($select);
        
		//jika sudah mendapatkan parameter GET nipd dari URL
		if(isset($_GET['kode_barang'])){
			//membuat variabel $id untuk menyimpan nipd dari GET id di URL
			$kode = $_GET['kode_barang'];
			
			//query ke database SELECT tabel mahasiswa berdasarkan id = $id
			$select = mysqli_query($koneksi, "SELECT * FROM gudang WHERE kode_barang='$kode'") or die(mysqli_error($koneksi));
			
			//jika hasil query = 0 maka muncul pesan error
			if(mysqli_num_rows($select) == 0){
				echo '<div class="alert alert-warning">NIPD tidak ada dalam database.</div>';
				exit();
			//jika hasil query > 0
			}else{
				//membuat variabel $data dan menyimpan data row dari query
				$data = mysqli_fetch_assoc($select);
			}
		}
		?>

<div> 
<table  cellpadding="7" cellspacing="7">
<form action="proses_update.php" method="POST">
        <tr>
            <td colspan="15">Form Input Barang</td>
        </tr>

        <tr>
        <td>Kode Barang : </td>
        <td></td>
        <td><input type="text" name="kode_barang" value="<?php echo $data['kode_barang']; ?>"></td>
        </tr>


        <tr>
        <td>Nama Barang : </td>
        <td></td>
        <td><input type="text" name="nama_barang" value="<?php echo $data['nama_barang']; ?>"></td>
        </tr>

        <tr>
        <td>Harga Barang : </td>
        <td></td>
        <td><input type="text" name="harga" value="<?php echo $data['harga']; ?>"></td>
        </tr>

        <tr>
        <td>Pengirim Barang : </td>
        <td></td>
        <td><input type="text" name="pengirim" value="<?php echo $data['pengirim']; ?>"></td>
        </tr>

        <tr>
        <td>Tanggal Masuk Gudang : </td>
        <td></td>
        <td><input type="date" name="tgl_masuk_gudang" value="<?php echo $data['tgl_masuk_gudang']; ?>"></td>
        </tr>

        <tr>
        <td>Satuan : </td>
        <td></td>
        <td><select name="satuan" id="">
                <?php 
                    if ($data['satuan']=='Kilogram' ) {
                        echo "<option value='Kilogram'  selected>Kilogram</option>";
                    }
                    else echo "<option value='Kilogram'>Kilogram</option>";
                    
                    if ($data['satuan']=='Pieces' ) {
                        echo "<option value='Pieces'  selected>Pieces</option>";
                    }
                    else echo "<option value='Pieces'>Pieces</option>";

            
                ?>
                </select>
                </td>
        </tr>

        <tr>
        <td>Kategori : </td>
        <td></td>
        <td><select name="kategori" id="">
        <?php 
                    if ($data['kategori']=='Pecah Belah' ) {
                        echo "<option value='Pecah Belah'  selected>Pecah Belah</option>";
                    }
                    else echo "<option value='Pecah Belah'>Pecah Belah</option>";
                    
                    if ($data['kategori']=='Benda Padat' ) {
                        echo "<option value='Benda Padat'  selected>Benda Padat</option>";
                    }
                    else echo "<option value='Benda Padat'>Benda Padat</option>";

                    if ($data['kategori']=='Benda Cair' ) {
                        echo "<option value='Benda Cair'  selected>Benda Cair</option>";
                    }
                    else echo "<option value='Benda Cair'>Benda Cair</option>";
            
                ?>
                </select>
                </td>
        </tr>


        <tr>
        <td>Stock : </td>
        <td></td>
        <td><input type="text" name="stock" value="<?php echo $data['stock']; ?>"></td>
        </tr>

        <tr>
        <td>Foto : </td>
        <td></td>
        <td><input type="text" name="foto" value="<?php echo $data['foto']; ?>"></td>
        </tr>

        <tr>
        <td><input type="submit" value="Simpan" name="simpan"></td>
        </tr>


        </form>
</table>
</div>
</body>
</html>