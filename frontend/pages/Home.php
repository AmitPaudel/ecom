<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="../styles/home.css" />
  <title>ESHOP | Home</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>



<body>
  <section class="menu">
    <a href="Home.php">

      <h3> ESHOP</h3>
    </a>
    <ul>

      <li><a href="#">About</a></li>
      <li><a href="#">Shop</a></li>
    </ul>
  </section>

  <!-- slider -->

  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item banner active" data-bs-interval="10000">
        <img src="../assets/images/banner_1.jpg" alt="banner-1" />
      </div>
      <div class="carousel-item banner" data-bs-interval="2000">
        <img src="../assets/images/banner_2.jpg" alt="banner-2" />
      </div>
      <div class="carousel-item banner">
        <img src="../assets/images/banner_3.jpg" alt="banner-3" />
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- list of products -->

  <?php
  require_once "../../config.php";
  



  ?>
 
  <section class="list_of_products">
    <div class="row">


      <div class="col-md-3 card">
        <div class="card-img">
          <a href="Product.php">

            <img src="../assets/images/product_1.jpg" alt="banner-3" />
          </a>
        </div>
        <div class="card-details">
          <div class="card-price">
            100000
          </div>
          <div class="card-btn">
            <button>Add to card</button>

          </div>
        </div>
      </div>
      <div class="col-md-3 card">
        <div class="card-img">
          <img src="../assets/images/product_2.jpg" alt="banner-3" />
        </div>
        <div class="card-details">
          <div class="card-price">
            100000
          </div>
          <div class="card-btn">
            <button>Add to card</button>

          </div>
        </div>
      </div>
      <div class="col-md-3 card">
        <div class="card-img">
          <a href="Product.php">

            <img src="../assets/images/product_3.jpg" alt="banner-3" />
          </a>
        </div>
        <div class="card-details">
          <div class="card-price">
            100000
          </div>
          <div class="card-btn">
            <button>Add to card</button>

          </div>
        </div>
      </div>
      <div class="col-md-3 card">
        <div class="card-img">
          <img src="../assets/images/product_2.jpg" alt="banner-3" />
        </div>
        <div class="card-details">
          <div class="card-price">
            100000
          </div>
          <div class="card-btn">
            <button>Add to card</button>

          </div>
        </div>
      </div>

    </div>
  </section>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>