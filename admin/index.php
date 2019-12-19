<?php
session_start();
//koneksi database
$koneksi = mysqli_connect("localhost","root","","klopstore");
if (!isset($_SESSION['admin']))
{
    echo "<script>alert('Anda harus login');</script>";
    echo "<script>location='login.php';</script>";
    header('location:login.php');
    exit();
}
?>

<?php include '../includeadmin/header.php';?>
<?php include '../includeadmin/sidebar.php';?>




<?php
                  if (isset($_GET['halaman']))
                  {
                        if($_GET['halaman']=="produk")
                      {
                          include 'produk.php';
                      }
                      elseif ($_GET['halaman']=="pembelian")
                      {
                          include 'pembelian.php';
                      }
                      elseif ($_GET['halaman']=="pelanggan")
                      {
                          include 'pelanggan.php';
                      }
                      elseif ($_GET['halaman']=="detail")
                      {
                          include 'detail.php';
                      }
                      elseif ($_GET['halaman']=="tambahproduk")
                      {
                          include 'tambahproduk.php';
                      }
                      elseif ($_GET['halaman']=="hapusproduk")
                      {
                          include 'hapusproduk.php';
                      }
                      elseif ($_GET['halaman']=="ubahproduk")
                      {
                          include 'ubahproduk.php';
                      }
                      elseif ($_GET['halaman']=="logout")
                      {
                          include 'logout.php';
                      }
                  }
                  else
                  {
                     include 'home.php';
                  }
                  ?>

<?php include '../includeadmin/script.php';?>