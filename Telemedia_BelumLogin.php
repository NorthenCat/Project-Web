<?php include 'koneksi.php' ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/10e6f0c3f8.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="cool.css">

    <title>Telemedia | Home </title>

  </head>

  <body id="page-top">

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-black" id="mainNav">
  <a class="navbar-brand text-monospace text-white" href="#page-top">Telemedia</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

        <li class="nav-item text-monospace bg-dark" style="font-size: 16px">
    <a class="nav-link text-white" href="#">Home</a>
  </li>
        <li class="nav-item dropdown text-monospace" >
          <a class="nav-link dropdown-toggle text-monospace  text-white" style="font-size: 16px" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Pilihan Jasa
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Hardware</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Jasa Multimedia</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Jasa TKJ</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Jasa TJA</a>
          </div>
        </li>
    </ul>
    <a class="nav-link text-white" href="login.php"><i class="fas fa-sign-in-alt"> Login</i></a>
  </div>
</nav>
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Selamat Datang Di Website Kami</h1>
      <hr class="my-4">
    <p class="text-monospace" style="font-size: 18px">Kami Menyediakan Laptop Buatan Murid SMK TELKOM BANDUNG Dan Menyediakan Jasa Jasa Murid SMK TELKOM BANDUNG</p>
  </div>
</div>
<h2 class="text-center"><p class="text-monospace">This is Our Product & Our Service</p></h2>
<div class="container">
  <div class="row">
  
    <?php
      $qury = "SELECT * FROM produk ORDER BY id_produk   ASC";
      $result = mysqli_query($koneksi,$qury);
      if(mysqli_num_rows($result) >0){
        while($row = mysqli_fetch_array($result)){
    ?>
      <div class="col-md-3">
        <div class="card" style="height: 34rem">
          <img class="card-img-top" src="img/<?php echo $row ['gambar_produk']; ?>" alt="Card image cap">
          <p class="card text m-1" style="color: #ff9900">Rp <?php echo number_format($row ['harga_produk']); ?></p>
          <div class="card-body">
            <h5 class="card-title"><?php echo $row ['nama_produk']; ?></h5>
            <p class="card-text "><?php echo $row ['deskripsi_produk']; ?></p> 
          </div>
          <a class="btn btn-primary form-control" href="reminder_login.php">Buy</a>
        </div>
      </div>
    <?php } } ?>
  </div>
</div>

  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> 
<!-- Footer -->
    <footer class="pt-5 pb-4" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
            <h5 class="mb-4 text-monospace">ABOUT US</h5>
            <p class="mb-4">Etiam laoreet in ex quis efficitur.</p>
            <ul class="f-address">
              <li>
                <div class="row">
                  <div class="col-1"><i class="fas fa-map-marker"></i></div>
                  <div class="col-10">
                    <h6 class="text-monospace mb-0">Address:</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="row">
                  <div class="col-1"><i class="far fa-envelope"></i></div>
                  <div class="col-10">
                    <h6 class="text-monospace mb-0">Have any questions?</h6>
                    <p><a href="#">Support@userthemes.com</a></p>
                  </div>
                </div>
              </li>
              <li>
                <div class="row">
                  <div class="col-1"><i class="fas fa-phone-volume"></i></div>
                  <div class="col-10">
                    <h6 class="font-weight-bold mb-0">Address:</h6>
                    <p class="text-monospace"><a href="#">+XX (0) XX XX-XXXX-XXXX</a></p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
            <h5 class="mb-4 font-weight-bold">FRESH TWEETS</h5>
            <ul class="f-address">
              <li>
                <div class="row">
                  <div class="col-1"><i class="fab fa-twitter"></i></div>
                  <div class="col-10">
                    <p class="mb-0" text-monospace><a href="#">@userthemesrel </a> HTML Version Out Now</p>
                    <label>10 Mins Ago</label>
                  </div>
                </div>
              </li>
              <li>
                <div class="row">
                  <div class="col-1"><i class="fab fa-twitter"></i></div>
                  <div class="col-10">
                    <p class="mb-0" text-monospace><a href="#">@userthemesrel </a> HTML Version Out Now</p>
                    <label>10 Mins Ago</label>
                  </div>
                </div>
              </li>
              <li>
                <div class="row">
                  <div class="col-1"><i class="fab fa-twitter"></i></div>
                  <div class="col-10">
                    <p class="mb-0" text-monospace><a href="#">@userthemesrel </a> HTML Version Out Now</p>
                    <label>10 Mins Ago</label>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          
          <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
            <h5 class="mb-4 font-weight-bold">CONNECT WITH US</h5>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Your Email Address">
                <span class="input-group-addon" id="basic-addon2"><i class="fas fa-check"></i></span>
            </div>
            <ul class="social-pet mt-4">
              <li><a href="#" title="facebook"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#" title="twitter"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#" title="google-plus"><i class="fab fa-google-plus-g"></i></a></li>
              <li><a href="#" title="instagram"><i class="fab fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- Copyright -->
    <section class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12 ">
            <div class="text-center text-white">
              &copy; 2018 Your Company. All Rights Reserved.
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>