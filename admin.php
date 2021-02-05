<?php
include("./global/db.php");
include('./includes/header.php');

session_start();

if(!isset($_SESSION['role'])){
  header('location: account.php');
}
else{
  if($_SESSION['role'] != 3){
    header('location: account.php');
  }
}

$query = "SELECT * FROM `Product`";
$query_response = mysqli_query($connection, $query);
$product_list = mysqli_fetch_all($query_response, MYSQLI_ASSOC);

?>
<div class="container">
  <h1>Panel de control</h1>

  <section>
    <h2>Administrar productos</h2>
    <table>
    <tr>
      <th>Producto</th>
      <th>Opciones</th>
    </tr>
<?php foreach($product_list as $product){?>
    <tr>
      <td>
        <div class="cart-info">
          <img src="<?php echo $product['image']; ?>" alt="">
        
          <div>
          <p><?php echo $product['name']; ?></p>
          </div>
        </div>
      </td>
      <td>
        <button class="btn">Editar</button>
        <button class="btn">Eliminar</button>
      </td>
    </tr>
<?php } ?>
    </table>
  </section>

  <section>
    <h2>Administrar usuarios</h2>
    <table>
    <tr>
      <th>Usuarios</th>
      <th>Opciones</th>
    </tr>
<?php
$query = "SELECT * FROM `User`";
$query_response = mysqli_query($connection, $query);
$user_list = mysqli_fetch_all($query_response, MYSQLI_ASSOC);
?>

<?php foreach($user_list as $user){?>
    <tr>
      <td>
        <div class="cart-info">
          <p><?php echo $user['username']; ?></p>
          <div>
          <p><?php echo $user['email']; ?></p>
          </div>
        </div>
      </td>
      <td>
        <button class="btn">Editar</button>
        <button class="btn">Eliminar</button>
      </td>
    </tr>
<?php } ?>
    </table>
  </section>


  <form action="account.php" method="POST">
    <input type="hidden" name="logout" />
    <button type="submit"class="btn">Cerrar sesión</button>
  </form>
</div>

<!-- footer -->
<?php include("./includes/footer.php"); ?>