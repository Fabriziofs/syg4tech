<?php
include("./global/db.php");
include("./includes/header.php");

if(isset($_GET['id'])){
  $category_id = $_GET['id'];
  $query = "SELECT * FROM `Category` WHERE id=$category_id";
  $query_response = mysqli_query($connection, $query);
  $category = mysqli_fetch_assoc($query_response);
}
else{
  // Redireccionar a index.php si no se ha pasado una id por el metodo GET.
  header("Location: ./index.php");
}
?>

  <div class="container">
    <div class="row">
      <div class="col-2">
        <h2><?php echo $category['name']?></h2>
        <p><?php echo $category['description']?></p>
      </div>
      <div class="col-2">
        <img src="<?php echo $category['image']?>" alt="category-<?php echo $category['name']?>" />
      </div>
      <div class="small-container">
        <h2 class="title">Nuestros <?php echo $category['name']?></h2>
        <div class="row">
          <?php
            $query = "SELECT * FROM `Product` WHERE `category_id`= {$category['id']}";
            $query_response = mysqli_query($connection, $query);
            $product_list = mysqli_fetch_all($query_response, MYSQLI_ASSOC);
          ?>
          <?php foreach($product_list as $product){ ?>
          <div class="col-4">
            <a href="<?php echo './single-product.php?id='.$product['id']; ?>">
            <img
              src="<?php echo $product['image']; ?>"
              alt="product-1"
            />
            </a>
            <h4><?php echo $product['name']; ?></h4>
            <p><?php echo $product['price']; ?>€</p>
          </div>
        <?php } ?>
        </div>
      </div>
    </div>
  </div>

