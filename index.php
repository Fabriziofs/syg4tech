<?php include("./global/db.php")?>
<?php include("./includes/header.php")?>

<main>
  <div class="container">
    <div class="row">
      <div class="col-2">
        <h1>
          Give Your Setup <br />
          A New Style!
        </h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero
          nulla
          <br />
          eaque repellendus sit recusandae adipisci voluptas ut similique
          sunt.
        </p>
        <a href="" class="btn">Explore Now &#8594;</a>
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

    <!-- Feature categories -->
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
$query = "SELECT * FROM `Product`";
        $query_response = mysqli_query($connection, $query);
        $product_list = mysqli_fetch_all($query_response, MYSQLI_ASSOC);
?>

    <!-- Newer products -->
    <div class="small-container">
      <h2 class="title">Newer Products</h2>
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

    <!-- Most watched products -->
    <div class="small-container">
      <h2 class="title">Most Watched</h2>
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
              src="./assets/brands-logos/ryzen-logo.jpg"
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

