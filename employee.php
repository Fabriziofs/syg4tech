<?php
include('./includes/header.php');
session_start();

if(!isset($_SESSION['role'])){
  header('location: account.php');
}
else{
  if($_SESSION['role'] != 2){
    header('location: account.php');
  }
}

?>

  <h1>PÁGINA SOLO DEL EMPLEADO</h1>
  <form action="account.php" method="POST">
  <input type="hidden" name="logout" />
  <button type="submit"class="btn">Cerrar sesión</button>

<!-- footer -->
<?php include("./includes/footer.php"); ?>