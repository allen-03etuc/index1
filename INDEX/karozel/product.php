<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
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

.nav-link {
  font-size: 25px;
}

nav a {
  margin-right: 20px;
  text-decoration: none;
  color: black;
    font-weight: bolder;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
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

 .product{
            width: 400px;
            margin: auto;
            padding: 20px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 0 10px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            align-content: center;
            padding-left: 40px;

        }
      

        .imgholder{
            width: 100%;
            height: 250px;
            border: 2px solid white;
            border-radius: 10px;
            overflow: hidden;
            margin: 15px;

        }

        #pix{
          overflow: hidden;
        }


       button{
        background-color: rgb(216, 216, 216);
        border-radius: 5px;
        font-family: fantasy;

       }

       .product-grid{
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        width: 90%;
        margin: auto;
        padding: 20px;
        }

      .product-card{
        width: 100%;
        margin: auto;
        padding: 20px;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 0 10px rgba (0,0,0,0.1);
        font-family: monospace;
      }

      .img-holder{
        width: 100%;
        height: 250px;
        overflow: hidden;
        margin-bottom: 15px;
      }

      .img-holder {
        height: 200px;

      }
      .img-holder img{
        height: 100%;
        width: 100%;
        object-fit: cover;

      }

      /* Burger button */
.burger {
  display: none;
  font-size: 30px;
  cursor: pointer;
  color: white;
}

/* MOBILE VIEW */
@media (max-width: 768px) {
  nav {
    flex-wrap: wrap;
  }

  .links {
    display: none;
    flex-direction: column;
    width: 100%;
    background-color: rgb(149, 195, 244);
    margin-top: 10px;
  }

  .links a {
    padding: 15px;
    margin: 0;
    border-top: 1px solid rgba(255,255,255,0.3);
  }

  .links.active {
    display: flex;
  }

  .burger {
    display: block;
  }

  .logos {
    margin-left: auto;
  }
}

.active {
  display: flex;
}

.modal {
  
  inset: 0;
  background: rgba(0, 0, 0, 0.5);
  z-index: 9999;
  align-items: center;
  justify-content: center;
}


.modal.active {
  display: flex;
}


.modal table {
  width: 50%;
  background: #fff;
  border-radius: 8px;
  border-collapse: collapse;
}


.modal th,
.modal td {
  width: 50%;
  padding: 15px;
  vertical-align: top;
}


.modal-box {
  text-align: center;
  padding: 10px;
  border-bottom: 1px solid #ddd;
}


#product_image {
  width: 100%;
  height: 160px;
  object-fit: cover;
  border-radius: 5px;
  margin-bottom: 10px;
}

.modiv input,
.customer input {
  width: 100%;
  padding: 6px;
  margin-bottom: 10px;
  box-sizing: border-box;
}


button {
  padding: 6px 14px;
  border-radius: 4px;
  border: none;
  cursor: pointer;
}

button[type="submit"] {
  background-color: rgb(202, 202, 202);
}



@media (max-width: 768px) {
  .modal table {
    width: 90%;
  }
}
    </style>
</head>

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
          <a class="nav-link active" aria-current="page" href="gana.php">Products</a>
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


<div class="product-grid">
<?php 
include 'db.php';
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>


<?php
if ($result->num_rows > 0) {
  while($product = $result->fetch_assoc()) {
    
    ?>



    <div class="product-card">


      <div class="img-holder">
        <img src="show.php?id=<?php echo $product['product_id'];?>" alt = "product iamge">
      </div>
    <div class="label">
      <strong> Product Name: </strong> <?php echo $product['product_name'];?>
    </div>
      <div class="label">
        <strong>Price:</strong> ₱ <?php echo number_format($product['price'],2);?>
      </div>

      <div class="stock">
        <strong>available stocks</strong> <?php echo $product ['stocks'];?>
      </div>

      <div class="btns">
        <button class="cart" onclick="addToCart(<?php echo $product['product_id'];?>)">
          ADD TO CART</button>
     
        <button class="buy-now" onclick="openModal(
        '<?php echo $product['product_id']?>',
        '<?php echo $product['product_name']?>',
          '<?php echo $product['price']?>')"> BUY NOW </button>

        
        
      </div>

    </div>
 
  
    
    <?php 
      }
} else {
    echo "<p>No products available</p>";
}

    $conn->close();
    ?>

</div> 

<div class="modal" id="modal">
  <table>
    <tr>
      <th>
        <div class="modal-box">
          <h3 id="Modhead"><strong>CONFIRM ORDER</strong></h3>
        </div>
      </th>
      <th>
        <div class="modal-box">
          <h3><strong>CUSTOMER INFO</strong></h3>
        </div>
      </th>
    </tr>

    <tr>
      <td class="modiv">
        <form method="POST" action="ngek.php">
          <input type="hidden" name="product_id" id="product_id">

          <img src="" id="product_image" alt="">

          <label>Product</label>
          <input type="text" name="product_name" id="product_name" readonly>

          <label>Price</label>
          <input type="number" name="price" id="price" readonly>

          <label>Quantity</label>
          <input type="number" name="total_order" id="total_order" oninput="computeTotal()" required>

          <label>Total</label>
          <input type="number" name="total_price" id="total_price" readonly>
      </td>

      <td class="customer">
          <label>Name</label>
          <input type="text" name="cname" id="cname" required>

          <label>Email/Contact#</label>
          <input type="text" name="contact" id="contact">

          <label>Adress</label>
          <input type="text" name="addy" id="addy">
      </td>
    </tr>

    <tr>
      <td colspan="2" align="center">
        <button type="submit">Place order</button>
        <button type="button" onclick="closeModal()">Cancel</button>
      </td>
    </tr>

        </form>
  </table>
</div>



    
<script>
function openModal(id,name,price, image) {
  document.getElementById("modal").classList.add("active");
  document.getElementById("product_id").value = id;
  document.getElementById("product_name").value = name;
  document.getElementById("price").value = price;
  document.getElementById("total_order").value = "1";
  document.getElementById("total_price").value = price;
  document.getElementById("product_image").src = "show.php?id=" +id;
}

function closeModal() {
  document.getElementById("modal").classList.remove("active");
}


function computeTotal() {
  let price = document.getElementById("price").value;
  let qty = document.getElementById("total_order").value;
  document.getElementById("total_price").value = price * qty;
}
</script>

<script src="./assets/dist/js/bootstrap.bundle.min.js"></script>




</body>
</html>

 --> 