<?php include 'koneksi.php';?>
<div class="container-fluid">
    <?php
$ambil=$koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
$pecah= $ambil->fetch_assoc();
?>
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Nama Produk</label>
            <input class="form-control" type="text" name="nama" value="<?php echo $pecah['nama_produk']; ?>">
        </div>
        <div class="form-group">
            <label>Harga Rp</label>
            <input class="form-control" type="text" name="harga" value="<?php echo $pecah['harga_produk']; ?>">
        </div>
        <div class="form-group">
            <label>Berat (Gr)</label>
            <input class="form-control" type="text" name="berat" value="<?php echo $pecah['berat_produk']; ?>">
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea class="form-control" name="deskripsi" row="10">
        <?php echo $pecah['deskripsi_produk']; ?>
        </textarea>
        </div>

        <div class="form-group">

            <img src="../foto_produk/<?php echo $pecah['foto_produk']; ?>" width="200">
        </div>
        <div class="form-group">
            <label>Ganti Foto</label>
            <input class="form-control" type="file" name="foto">
        </div>

        <button class="btn btn-primary" name="ubah">Ubah</button>
    </form>
    <?php
    if (isset($_POST['ubah']))
    {
        $namafoto=$_FILES['foto']['name'];
        $lokasifoto = $_FILES['foto']['tmp_name'];
        //jika foto di rubah
        if (!empty($lokasifoto))
        {
            move_uploaded_file($lokasifoto, "../foto_produk/$namafoto");

            $koneksi->query("UPDATE produk SET nama_produk='$_POST[nama]',
            harga_produk='$_POST[harga]',berat_produk='$_POST[berat]',
            foto_produk='$namafoto',deskripsi_produk='$_POST[deskripsi]' 
            WHERE id_produk='$_GET[id]'");
        }
        else
        {
            $koneksi->query("UPDATE produk SET nama_produk='$_POST[nama]',
            harga_produk='$_POST[harga]',berat_produk='$_POST[berat]',
            deskripsi_produk='$_POST[deskripsi]' WHERE id_produk='$_GET[id]'");
        }

        echo "<script>alert('data produk telah diubah');</script>";
        echo "<script>location='index.php?halaman=produk';</script>";

    }
?>

</div>