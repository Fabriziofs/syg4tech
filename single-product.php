<?php 
include("./global/db.php");
include("./global/config.php");
include("./includes/header.php");
include("./cart.php");

if(isset($_GET['id'])){
  $product_id = $_GET['id'];
  $query = "SELECT * FROM `Product` WHERE id=$product_id";
  $query_response = mysqli_query($connection, $query);
  $product = mysqli_fetch_assoc($query_response);
}
else{
  // Redireccionar a index.php si no se ha pasado una id por el metodo GET.
  header("Location: ./index.php");
}

?>

<!-- single product details -->

<div class="small-container single-product">
      <div class="row">
        <div class="col-2">
        <img src="<?php echo $product['image']; ?>" alt="" />
        </div>
        <div class="col-2">
          <p> <a href="./index.php">Home</a>/<?php echo $product['name']; ?></p>
          <h1><?php echo $product['name']; ?></h1>
          <h4><?php echo $product['price']; ?>€</h4>

          <form method="POST">
            <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($product['id'],COD,KEY); ?>" />
            <input type="hidden" name="name" id="name" value="<?php echo openssl_encrypt($product['name'],COD,KEY);  ?>" />
            <input type="hidden" name="price" id="price" value="<?php echo openssl_encrypt($product['price'],COD,KEY);  ?>" />
            <input type="number" name="quantity" id="quantity" value="1"/>
            <input type="hidden" name="image" id="image" value="<?php echo openssl_encrypt($product['image'],COD,KEY); ?>" />
            <button type="submit" name="btnAccion" value="addToCart" class="btn">Add to cart</button>
          </form>

          <h3>Detalles del producto:</h3>
          <p>
          <?php echo $product['description']; ?>
          </p>
        </div>
      </div>
    </div>
  <!-- footer -->
  <?php include("./includes/footer.php")?>