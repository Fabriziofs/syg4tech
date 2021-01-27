<?php include("./global/db.php")?>
<?php include("./global/config.php")?>
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
          <form action="" method="POST">
            <input type="text" name="id" id="id" value="<?php echo openssl_encrypt($product['id'],COD,KEY);?>" />
            <input type="text" name="name" id="name" value="<?php echo openssl_encrypt($product['name'],COD,KEY); ?>" />
            <input type="text" name="price" id="price" value="<?php echo openssl_encrypt($product['price'],COD,KEY); ?>" />
            <input type="number" name="quantity" id="quantity" value="<?php echo openssl_encrypt(1,COD,KEY); ?>" />
            <button type="submit" name="btnAccion" value="addToCart" class="btn">Add to cart</button>
          </form>

          <h3>Product details</h3>
          <p>
            Socket AMD AM4: Listo para procesadores AMD Ryzen™ de tercera
            generación. Refrigeración integral: Disipador VRM, disipador PCH y
            Fan Xpert 2+. Conectividad ultrarrápida: Dual M.2, PCIe 4.0, 1 Gb
            Ethernet, USB 3.2 Gen 2 Tipo-A. Aura Sync RGB: Puerto direccionable
            Gen 2 incorporado para tiras de LED RGB, sincronizado fácilmente con
            hardware compatible con Aura Sync.
            <hr>
            <?php print_r($_POST);?>
          </p>
        </div>
      </div>
    </div>
