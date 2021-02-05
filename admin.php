<?php
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

?>

  <form action="account.php" method="POST">
  <input type="hidden" name="logout" />
  <button type="submit"class="btn">Cerrar sesión</button>
  </form>

<!-- footer -->
<?php include("./includes/footer.php"); ?>