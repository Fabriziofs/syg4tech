<?php include("db.php")?>

<?php
$product_id = $_GET['id'];
$query = "SELECT * FROM `Product` WHERE id=$product_id";
$query_response = mysqli_query($connection, $query);
$product = mysqli_fetch_assoc($query_response);
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./main.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />
    <title>Producto details</title>
  </head>
  <body>
    <div class="container">
    <div class="navbar">
          <div class="logo">
            <img
              src="./assets/logo.png"
              alt="logo-icon"
              width="50px"
              height="30px"
            />
          </div>
          <nav>
            <ul id="menuItems">
              <li><a href="./index.php">Home</a></li>
              <li><a href="./account.php">Account</a></li>
            </ul>
          </nav>
          <a href="./car.php">
          <img
            src="./assets/shopping-cart.png"
            alt="shopping-cart-icon"
            width="25px"
            height="25px"
          />
          </a>
          <img
            class="menu-icon"
            onclick="menuToggle()"
            src="./assets/menu.png"
            alt="logo-icon"
            height="25px"
          />
        </div>
    </div>
<!-- single product details -->

<div class="small-container single-product">
      <div class="row">
        <div class="col-2">
        <img src="<?php echo $product['image']; ?>" alt="" />
        </div>
        <div class="col-2">
          <p>Home /<?php echo $product['name']; ?></p>
          <h1><?php echo $product['name']; ?></h1>
          <h4><?php echo $product['price']; ?>€</h4>
          <input type="number" value="1" />
          <a href="" class="btn">Add to cart</a>
          <h3>Product details</h3>
          <p>
            Socket AMD AM4: Listo para procesadores AMD Ryzen™ de tercera
            generación. Refrigeración integral: Disipador VRM, disipador PCH y
            Fan Xpert 2+. Conectividad ultrarrápida: Dual M.2, PCIe 4.0, 1 Gb
            Ethernet, USB 3.2 Gen 2 Tipo-A. Aura Sync RGB: Puerto direccionable
            Gen 2 incorporado para tiras de LED RGB, sincronizado fácilmente con
            hardware compatible con Aura Sync.
          </p>
        </div>
      </div>
    </div>
