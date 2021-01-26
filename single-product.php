<?php include("db.php")?>
<?php include("./includes/header.php")?>
<?php
$product_id = $_GET['id'];
$query = "SELECT * FROM `Product` WHERE id=$product_id";
$query_response = mysqli_query($connection, $query);
$product = mysqli_fetch_assoc($query_response);
?>

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
