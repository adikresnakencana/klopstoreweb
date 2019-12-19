<?php
session_start();
//koneksi database
$koneksi = new mysqli("localhost","root","","klopstore");
?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Klop Store Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="../assets/vendor/bootstrap/scss/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="../assets/vendor/scss/fontawesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <!-- <link href="assets/css/custom.css" rel="stylesheet" /> -->
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>

<body>

    <h1 class="text-center">Klop Store Admin </h1>
    <div class="container pt-3">
        <div class="row justify-content-sm-center">
            <div class="col-sm-6 col-md-4">

                <div class="card border-info text-center">
                    <div class="card-header">
                        Sign in to continue
                    </div>
                    <div class="card-body">
                        <h4 class="text-center">Hunger & Debt Ltd</h4>
                        <form class="form-signin" method="post">
                            <input type="text" class="form-control mb-2" name="user" required autofocus>
                            <input type="password" class="form-control mb-2" name="pass" required>
                            <button class="btn btn-lg btn-primary btn-block mb-1" name="login">Sign in</button>
                            <label class="checkbox float-left">
                                <input type="checkbox" value="remember-me">
                                Remember me
                            </label>
                            <a href="#" class="float-right">Need help?</a>
                            <?php
                        if (isset($_POST['login']))
                        {
                            $ambil = $koneksi->query("SELECT * FROM admin WHERE username='$_POST[user]'
                            AND password ='$_POST[pass]'");
                            $yangcocok = $ambil->num_rows;
                            if ($yangcocok==1)
                            {
                                $_SESSION['admin']=$ambil->fetch_assoc();
                                echo "<div class='alert alert-info'>Login sukses</div>";
                                echo "<meta http-equiv='refresh' content='1;url=index.php'>"; 
                                // header("Location: index.php");
                            }
                            else
                            {
                                echo "<div class='alert alert-danger'>Login Gagal</div>";
                                echo "<meta http-equiv='refresh' content='1;url=login.php'>";
                            }
                        }
                    
                        ?>
                        </form>
                    </div>
                </div>
                <a href="#" class="float-right">Create an account </a>
            </div>

        </div>
    </div>
    </body>
    </html>

    
   