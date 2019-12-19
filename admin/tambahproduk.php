<?php include 'koneksi.php';?>
<div class="container-fluid">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>nama</label>
            <input class="form-control" type="text" name="nama">
        </div>
        <div class="form-group">
            <label>Harga (Rp)</label>
            <input class="form-control" type="number" name="harga">
        </div>
        <div class="form-group">
            <label>Berat (Gr)</label>
            <input class="form-control" type="number" name="berat">
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea class="form-control" type="number" name="deskripsi" row="10"></textarea>
        </div>
        <div class="form-group">
            <label>Stok</label>
            <input class="form-control" type="number" name="stok" row="10"></input>
        </div>
        <div class="form-group">
            <label>Foto</label>
            <input class="form-control" type="file" name="foto">
        </div>
        <button class="btn btn-primary" name="save">Simpan</button>
    </form>
    <?php
if (isset($_POST['save']))
{
    $nama = $_FILES['foto']['name'];
    $lokasi =$_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasi, "../foto_produk/".$nama);
    $koneksi->query("INSERT INTO produk
    (nama_produk,harga_produk,berat_produk,foto_produk,deskripsi_produk,stok_produk)
    VALUES('$_POST[nama]','$_POST[harga]','$_POST[berat]','$nama','$_POST[deskripsi]','$_POST[stok]')");

    echo "<div class='alert alert-info'>Data tersimpan</div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=produk'>"; 
}
?>
</div>