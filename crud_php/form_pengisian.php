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
<div> 
<table  cellpadding="7" cellspacing="7">
<form action="proses_input.php" method="POST">
        <tr>
            <td colspan="15">Form Input Barang</td>
        </tr>

        <tr>
        <td>Nama Barang : </td>
        <td></td>
        <td><input type="text" name="nama_barang"></td>
        </tr>

        <tr>
        <td>Harga Barang : </td>
        <td></td>
        <td><input type="text" name="harga"></td>
        </tr>

        <tr>
        <td>Pengirim Barang : </td>
        <td></td>
        <td><input type="text" name="pengirim"></td>
        </tr>

        <tr>
        <td>Tanggal Masuk Gudang : </td>
        <td></td>
        <td><input type="date" name="tgl_masuk_gudang"></td>
        </tr>

        <tr>
        <td>Satuan : </td>
        <td></td>
        <td><select name="satuan" id="">
                <option value="Kilogram">Kilogram</option>
                <option value="Pieces">Pieces</option>
                </select>
                </td>
        </tr>

        <tr>
        <td>Kategori : </td>
        <td></td>
        <td><select name="kategori" id="">
                <option value="Pecah Belah">Pecah Belah</option>
                <option value="Benda Padat">Benda Padat</option>
                <option value="Benda Cair">Benda Cair</option>
                </select>
                </td>
        </tr>


        <tr>
        <td>Stock : </td>
        <td></td>
        <td><input type="text" name="stock"></td>
        </tr>

        <tr>
        <td>Foto : </td>
        <td></td>
        <td><input type="text" name="foto"></td>
        </tr>

        <tr>
        <td><input type="submit" value="Simpan" name="simpan"></td>
        </tr>


        </form>
</table>
</div>
</body>
</html>