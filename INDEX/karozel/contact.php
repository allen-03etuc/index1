<!--

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="bootstrap.min.css" rel="stylesheet"/>
    <link href="carousel/carousel.css" rel="stylesheet">

    <style>
           body{
  background-color: rgb(202, 202, 202);
  
}
nav {
  display: flex;
  
  justify-content: space-between;
  padding: 10px 20px;
  position: fixed;
 background-color: rgb(202, 202, 202);
  width: 100%;
  
}

#logo{
 width: 70px;
}


nav a {
  margin-right: 20px;
  text-decoration: none;
  color: black;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    
}

.nav-link {
  font-size: 25px;
}

.logos img {
  height: 40px;        
  margin-left: 15px;
  margin-right: 20px;

}

header {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 1000;
  background-color: white;
 
}

.contact{
    border: solid 2px;
    width: 50%;
    padding: 10px;
    border-radius: 10px;
    background-color: white;
    font-weight: bold;
    
}

.footer {
  background: #000;
  color: #fff;
  padding: 40px 60px;
  font-size: 14px;
  box-sizing: border-box;

}

.footer-container {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 30px;
}

.footer-logo {
  width: 180px;
  margin-bottom: 15px;
}

.footer-left p {
  margin: 8px 0;
}

.footer-center h3,
.footer-right h3 {
  margin-bottom: 10px;
}

.footer-center a {
  display: block;
  color: #ccc;
  text-decoration: none;
  margin-bottom: 6px;
}

.footer-center a:hover {
  color: #fff;
}

.footer-socials img {
  width: 28px;
  margin-right: 10px;

  transition: transform 0.2s;
}
    </style>
</head>
<body>
    <body>  
<header>
  <nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
   <img src="daily drip logo.png" id="logo">
    <a class="navbar-brand" href="#"></a> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="product.php">Products</a>
        </li>

         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="contact.php">Contact us</a>
        </li>

         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="about.php">About us</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
     
      </form>
    </div>
  </div>
</nav>
</header>

<div id="myCarousel" class="carousel slide mb-6" 
     data-bs-ride="carousel">
     

  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2"></button>
   
  </div>

 <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="img.jpg" alt="" width="100%" height="100%" alt="img1">
    </div>

    <div class="carousel-item">
      <img src="img.jpg" alt="" width="100%" height="100%"alt="img2">
    </div>

    <div class="carousel-item">
      <img src="img3.jpg" alt="" width="100%" height="100%" alt="img3">
    </div>

  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>

</div> 

<center>
    <h2> Contact Us</h2>
<div class="contact">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
</div>
</center>
<br> <br>


 
  <footer class="footer">
  <div class="footer-container">

   
    <div class="footer-left">
      <img src="DD White.png" class="footer-logo">
      <p><strong>+63 912 345 6789</strong></p>
      <p>Selling limited editions, quick strikes and other hard-to-find drip. 100% legit guaranteed.</p>
      <p>We hope to put some heat on your feet soon.</p>
      <div class="footer-socials">
        <a href="https://www.facebook.com/"><img src="fb.png"></a>
        <a href="https://www.instagram.com/"><img src="ig.png"></a>
        <a href="https://mail.google.com/mail/u/0/#inbox"><img src="email.png"></a>
      </div>
    </div>

 
    <div class="footer-center">
      <h3>POLICIES</h3>
      <a href="#">Refund Policy</a>
      <a href="#">Shipping Policy</a>
      <a href="#">Privacy Policy</a>
      <a href="#">Terms of Service</a>
    </div>

   
    <div class="footer-right">
      <h3>GET IN TOUCH</h3>
      <p>Address: Misa de Gallo St. cor. Ascension Ave., <br>Barangay Greater Lagro, Novaliches, QC</p>
      <p>Phone: +63 912 345 6789</p>
      <p>Email: dailydrip@gmail.com</p>
      <h3>BUSINESS HOURS</h3>
      <p>Open: <strong>10:00 AM</strong> – Close: <strong>7:00 PM</strong><br>Open daily</p>
    </div>

  </div>
  </footer>


    <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>