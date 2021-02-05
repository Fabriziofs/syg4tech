<?php
include("./global/db.php");
include("./includes/header.php");
?>

<main>
  <div class="container">
    <div class="row">
      <div class="col-2">
        <h1>
          Dale a tu Setup <br />
          un nuevo estilo!
        </h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero
          nulla
          <br />
          eaque repellendus sit recusandae adipisci voluptas ut similique
          sunt.
        </p>
        <a href="" class="btn">Explorar ahora &#8594;</a>
      </div>
      <div class="col-2">
        <img src="./assets/main-picture.png" alt="" />
      </div>
    </div>
  </div>
</main>

<?php
$query = "SELECT * FROM `Category`";
        $query_response = mysqli_query($connection, $query);
        $category_list = mysqli_fetch_all($query_response, MYSQLI_ASSOC);
?>

    <!-- categories -->
    <div class="categories">
      <div class="small-container">
        <div class="row">
<?php foreach($category_list as $category){ ?>
          <div class="col-3">
            <h2><?php echo $category['name']; ?></h2>
            <img src="<?php echo $category['image']; ?>" alt="category-<?php echo $category['id']; ?>" />
          </div>
<?php } ?>
        </div>
      </div>
    </div>

<?php
$query = "SELECT * FROM `Product` ORDER BY `Product`.`createdAt` DESC LIMIT 4";
        $query_response = mysqli_query($connection, $query);
        $newer_products = mysqli_fetch_all($query_response, MYSQLI_ASSOC);
?>

    <!-- Newer products -->
    <div class="small-container">
      <h2 class="title">Productos nuevos</h2>
      <div class="row">
<?php foreach($newer_products as $product){ ?>
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

<?php
$query = "SELECT * FROM `Product`";
        $query_response = mysqli_query($connection, $query);
        $product_list = mysqli_fetch_all($query_response, MYSQLI_ASSOC);
?>

    <!-- All products -->
    <div class="small-container">
      <h2 class="title">Todos los productos</h2>
      <div class="row">
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

    <!-- brands -->
    <div class="brands">
      <div class="small-container">
        <div class="row">
          <div class="col-5">
            <img
              src="./assets/brands-logos/razer-logo.png"
              alt="razer-logo"
            />
          </div>
          <div class="col-5">
            <img
              src="./assets/brands-logos/ryzen-logo.png"
              alt="ryzen-logo"
            />
          </div>
          <div class="col-5">
            <img
              src="./assets/brands-logos/nfortec-logo.png"
              alt="nfortec-logo"
            />
          </div>
          <div class="col-5">
            <img
              src="./assets/brands-logos/razer-logo.png"
              alt="razer-logo"
            />
          </div>
          <div class="col-5">
            <img
              src="./assets/brands-logos/razer-logo.png"
              alt="razer-logo"
            />
          </div>
        </div>
      </div>
    </div>

    <!-- footer -->
    <?php include("./includes/footer.php")?>

