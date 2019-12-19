<?php
session_start();
//koneksi database
$koneksi = mysqli_connect("localhost","root","","klopstore");
?>

<?php include 'includeweb/navbar.php';?>
<?php include 'includeweb/konten.php';?>
<?php include 'includeweb/footer.php';?>
<?php include 'includeadmin/script.php';?>


