   <div class="container">
       <!-- carousel -->
       <section class="carausel">
           <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                   <div class="carousel-item active">
                       <img src="foto_produk/foto1.jpg" class="d-block w-100" alt="...">
                   </div>
                   <div class="carousel-item">
                       <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(16).jpg" class="d-block w-100"
                           alt="...">
                   </div>
                   <div class="carousel-item">
                       <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(17).jpg" class="d-block w-100"
                           alt="...">
                   </div>
               </div>
               <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                   <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                   <span class="carousel-control-next-icon" aria-hidden="true"></span>
                   <span class="sr-only">Next</span>
               </a>
           </div>
       </section>

       <!-- carousel -->
       <!-- konten -->
       <section class="konten">
           <div class="container">
               <h1 align="center">NEW ARRIVAL</h1>
               <div class="row">
                   <!-- php mengambil query -->
                   <?php $ambil = $koneksi->query("SELECT * FROM produk"); ?>
                   <?php while($perproduk = $ambil->fetch_assoc()){ ?>
                   <div class="col-lg-4 col-md-6 mb-4">
                       <div class="thumbnail">
                           <img src="foto_produk/<?php echo $perproduk['foto_produk'] ?>" alt="" class="card-img-top">
                           <div class="caption">
                               <h3 class="card-title"><?php echo $perproduk['nama_produk'] ?></h3>
                               <h5>Rp. <?php echo number_format ($perproduk['harga_produk']) ?></h5>
                               <a href="" class="btn btn-primary">beli</a>
                           </div>

                       </div>

                   </div>
                   <?php } ?>
               </div>

           </div>

       </section>
       <!-- konten -->
   </div>
   </body>

   </html>

  