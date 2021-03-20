
<?php  
 //DEV
 $connect = mysqli_connect("178.128.208.156", "rizkyaddon", "Jakarta123!", "mede_mama"); 
 
 //PROD
 //$connect = mysqli_connect("localhost", "root", "Jakarta123!", "saham");  

 $query ="SELECT * FROM product where is_featured = 1";  
 $result = mysqli_query($connect, $query); 
 ?>  

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cashew and Almond - By Mamamede</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head> 

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">cashew&almond</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <!-- <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          -->
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4" style="color:#555"><img width="100%" src="images/logo-cemalcemil.jpeg"/></h1>
        <div class="list-group">
          <a href="#" style="border:dashed #fff 2px; color:#777;background-color: #f5f5f5" class="list-group-item">Mede</a>
          <a href="#" style="border:dashed #fff 2px; color:#777;background-color: #f5f5f5" class="list-group-item">Almond</a>
          <a href="#" style="border:dashed #fff 2px; color:#777;background-color: #f5f5f5" class="list-group-item">Kacang Tanah</a>
          <a href="http://rizkyaddon.com/mamamede" target="_blank" style="border:dashed #fff 2px; color:#fff;background-color: #B89E78; font-weight: bold;margin-top:45px;" class="list-group-item">Daftar Harga</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="images/banner-cashew2.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="images/banner-almond.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="images/banner-peanuts2.jpeg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row" style="border-top: dashed #B89E78 2px; padding-top: 15px">
          <div class="col-lg-12">
            <p style="font-weight: bold; color:#777">Produk Pilihan</p>
          </div>
        </div>

        <div class="row">

          <?php while($row = mysqli_fetch_object($result)):?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <?php
                $image_object = json_decode($row->image_url);
              ?>
              <a href="#"><img class="card-img-top" src="images/<?php echo $image_object->main_image?>" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#"><?php echo $row->product_name?></a>
                </h4>
                <h5>Rp<?php echo number_format($row->price_to_customer)?></h5>
                <p class="card-text"><?php echo $row->product_desc?></p>
              </div>
              <div class="card-footer">
                <div onclick='window.open("https\://api.whatsapp.com/send?phone=6283892110929&text=Saya berminat untuk <?php echo $row->product_name?>, apakah stok masih ada?","_blank");' style="padding:5px; background: #efefef; text-align: center; cursor: pointer;border: dashed #fff 2px" class="text-muted"><b>beli dong!</b></div>
              </div>
            </div>
          </div>
          <?php endwhile;?>
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-lg-12">
            <a href="http://rizkyaddon.com/mamamede" target="_blank" style="float: right; text-align: right; font-weight: bold; color: #B89E78; margin-bottom: 15px">lihat semua produk >></a>
          </div>
        </div>

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; mamamede 2021</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
