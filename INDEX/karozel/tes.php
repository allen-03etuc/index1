<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="carousel/carousel.css" rel="stylesheet">
    <link href="karosel.css" rel="stylesheet">
</head>

<body>  
<header>
  <nav>
    <div class="links">
      <a href="#">HOME</a>
      <a href="#">ADMIN</a>
      <a href="#">Contact us</a>
    </div>

    <div class="logos">
      <img src="cart.png">
      <img src="person.png">
    </div>
  </nav>
</header>


<div id="myCarousel" class="carousel slide mb-6" 
     data-bs-ride="carousel" 
     data-bs-wrap="false">

  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2"></button>
  </div>

  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="Screenshot 2025-12-11 160207.png" alt="" width="100%" height="100%">
    </div>

    <div class="carousel-item">
      <img src="Screenshot 2024-09-12 223856.png" alt="" width="100%" height="100%">
    </div>

    <div class="carousel-item">
      <img src="ARGUILLES, CYRUZ RENZ E..jpg" alt="" width="100%" height="100%">
    </div>

  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>

</div> 


<?php 
include 'db.php';
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<div class="product-grid">
<?php
if ($result->num_rows > 0) {
  while($product = $result->fetch_assoc()) {
    
  }
}
?>
</div>



<div class="product-grid">

  <section>
    <div class="product">

      <div class="img-holder">
        <img src="Screenshot 2024-09-12 223822.png" id="pix">
      </div>

      <div class="label">
        <h3>ALLEN CAPILI</h3>
        <strong>Price:</strong>
      </div>

      <div class="stock">
        <strong>available stocks</strong>
      </div>

      <div class="btns">
        <button class="cart">ADD TO CART</button>
        <button class="buy">BUY NOW</button>
      </div>

    </div>
  </section>

</div> 


<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
