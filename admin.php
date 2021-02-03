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


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página del admin</title>
</head>
<body>
  <h1>PÁGINA SOLO DEL ADMIN</h1>
  <form action="account.php" method="POST">
  <input type="hidden" name="logout" />
    <input type="submit"/>
  </form>
</body>
</html>