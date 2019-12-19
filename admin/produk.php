<?php include 'koneksi.php';?>
<div class="container-fluid">
    <table class="table table-striped table-bordered table-hover" >
        <thead class="thead-dark">
            <tr>
                <th>no</th>
                <th>nama</th>
                <th>Deskripsi</th>
                <th>harga</th>
                <th>berat</th>
                <th>stok</th>
                <th>foto</th>
                <th>hapus</th>
                <th>ubah</th>
            </tr>
        </thead>
        <thead class="thead-dark">
            <?php $nomor=1; ?>
            <?php $ambil=$koneksi->query("SELECT * FROM produk"); ?>
            <?php while($pecah = $ambil->fetch_assoc()){ ?>
            <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $pecah['nama_produk']; ?></td>
                <td class="wrapword" ><?php echo $pecah['deskripsi_produk']; ?> </td>
                <td>Rp.<?php echo $pecah['harga_produk']; ?></td>
                <td><?php echo $pecah['berat_produk']; ?></td>
                <td><?php echo $pecah['stok_produk']; ?></td>
                <td>
                    <img src="../foto_produk/<?php echo $pecah['foto_produk']; ?>" width="100">
                </td>
                <td>
                    <a href="index.php?halaman=hapusproduk&id=<?php echo $pecah['id_produk'];?>"
                        class="btn-danger btn">hapus </a>
                </td>
                <td>
                    <a href="index.php?halaman=ubahproduk&id=<?php echo $pecah['id_produk'];?>"
                        class="btn-warning btn">Ubah </a>

                </td>
            </tr>
            <?php $nomor++; ?>
            <?php } ?>
        </thead>
    </table>
    <a href="index.php?halaman=tambahproduk " class="btn btn-primary">Tambah data</a>
</div>