<?php 
include("./global/db.php");
include("./global/config.php");
include("./includes/header.php");

if(isset($_POST['logout'])){
    session_unset();
    session_destroy();
}

if(isset($_SESSION['role'])){
  switch ($_SESSION['role']) {
    case 1:
        header('location: client.php');
      break;
    
    case 2:
        header('location: employee.php');
      break;

    case 3:
        header('location: admin.php');
      break;
  }
}

if(isset($_POST['Login'])){
  if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = openssl_encrypt($_POST['password'],COD,KEY);
  
    $query = "SELECT * FROM `User` WHERE username='$username' AND password='$password'";
    $query_response = mysqli_query($connection, $query);
    $user = mysqli_fetch_array($query_response, MYSQLI_ASSOC);
  
    if($user){
      $_SESSION['role'] = $user['role_id'];
      
      switch ($_SESSION['role']) {
        case 1:
            header('location: client.php');
          break;
        
        case 2:
            header('location: employee.php');
          break;
    
        case 3:
            header('location: admin.php');
          break;
      }
    }
    else{
      echo "Usuario o contraseña incorrectos.";
    }
  }
}
elseif(isset($_POST['Register'])){
  
  $userdata = array(
    'firstname' => $_POST['firstname'],
    'lastname' => $_POST['lastname'], 
    'username' => $_POST['username'],
    'email' => $_POST['email'],
    'password' => openssl_encrypt($_POST['password'],COD,KEY)
  );

  if(count($userdata) == 5){
    $query = "INSERT INTO `User` (`id`, `firstName`, `lastName`, `username`, `email`, `password`, `role_id`, `address_id`)
              VALUES (NULL,'{$userdata['firstname']}', '{$userdata['lastname']}', '{$userdata['username']}', '{$userdata['email']}', '{$userdata['password']}', '1', NULL)";
      
    if(mysqli_query($connection, $query) == true){
      printf("Usuario agregado correctamente.\n");
    }
  }
  else{
    print_r('Te falta algun dato.');
  }
}
?>

    <!-- account page  -->

    <div class="account-page">
      <div class="container">
        <div class="row">
          <div class="col-2">
            <img src="./assets/main-picture.png" alt="" width="100%" />
          </div>
          <div class="col-2">
            <div class="form-container">
              <div class="form-btn">
                <span onclick="login()">Login</span>
                <span onclick="register()">Register</span>
                <hr id="indicator" />
              </div>
              <form action="" id="loginForm" method="POST">
                <input type="text"  name="username" placeholder="Username" />
                <input type="password" name="password" placeholder="Password" />
                <input type="submit" class="btn" value="Login" name="Login"/>
                <a href="">Forgot Password</a>
              </form>
              <form action="" id="registerForm" method="POST">
                <input type="text" name="firstname" placeholder="First name" required/>
                <input type="text" name="lastname" placeholder="Last name" required/>
                <input type="text" name="username" placeholder="Username" required/>
                <input type="email" name="email" placeholder="Email" required/>
                <input type="password" name="password" placeholder="Password" required/>
                <input type="submit" class="btn" value="Register" name="Register"/>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- footer -->
<?php include("./includes/footer.php")?>
