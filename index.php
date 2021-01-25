<?php include("db.php") ?>
<?php include("./includes/header.php")?>

<?php
$query = "SELECT * FROM `Product`";
        $query_response = mysqli_query($connection, $query);
        $product_list = mysqli_fetch_all($query_response, MYSQLI_ASSOC);
?>

    <!-- Feature categories -->

    <div class="categories">
      <div class="small-container">
        <div class="row">
          <div class="col-3">
            <h2> Portátiles</h2>
            <img src="./assets/category-img/category-1.png" alt="category-1" />
          </div>
          <div class="col-3">
            <h2>Periféricos</h2>
            <img src="./assets/category-img/category-2.png" alt="category-2" />
          </div>
          <div class="col-3">
            <h2>Componentes</h2>
            <img src="./assets/category-img/category-3.png" alt="category-3" />
          </div>
        </div>
      </div>
    </div>

    <!-- Newer products -->

    <div class="small-container">
      <h2 class="title">Newer Products</h2>
      <div class="row">
<?php foreach($product_list as $product){ ?>
        <div class="col-4">  
          <a href="<?php echo './single-product.php?id='.$product['id'] ?>">
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
          <img
            src="<?php echo $product['image']; ?>"
            alt="product-1"
          />
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
              src="./assets/brands-logos/10-106541_logo-razer-png-razer-logo-png-transparent-png.png"
              alt="razer-logo"
            />
          </div>
          <div class="col-5">
            <img
              src="./assets/brands-logos/kisspng-ryzen-multi-core-processor-intel-advanced-micro-de-amd-5b3243a98e0151.5457042115300207775817.jpg"
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
              src="./assets/brands-logos/10-106541_logo-razer-png-razer-logo-png-transparent-png.png"
              alt="razer-logo"
            />
          </div>
          <div class="col-5">
            <img
              src="./assets/brands-logos/10-106541_logo-razer-png-razer-logo-png-transparent-png.png"
              alt="razer-logo"
            />
          </div>
        </div>
      </div>
    </div>

    <!-- footer -->
    <?php include("./includes/footer.php")?>

