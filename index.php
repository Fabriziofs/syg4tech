<?php include("db.php") ?>
<?php include("./includes/header.php")?>

<?php
$query = "SELECT * FROM `Product`";
        $query_response = mysqli_query($connection, $query);
        $product_list = mysqli_fetch_all($query_response, MYSQLI_ASSOC);
?>
  <main>
    <section>
<?php foreach($product_list as $product){ ?>
      <div>
        <p>Nombre:<?php echo $product['name']; ?></p>
        <p> Precio: <?php echo $product['price']; ?>€</p>
        <picture>
          <img src="<?php echo $product['image']; ?>" width="300px" height="300px" alt="">
        </picture>
      </div>
      <?php } ?>
    </section>
  </main>
<?php include("./includes/footer.php")?>



