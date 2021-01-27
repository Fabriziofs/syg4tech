<?php include("./global/db.php")?>
<?php include("./includes/header.php")?>

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
              <form action="" id="loginForm">
                <input type="text" placeholder="Username" />
                <input type="password" placeholder="Password" />
                <input type="submit" class="btn" value="Login" />
                <a href="">Forgot Password</a>
              </form>
              <form action="" id="registerForm">
                <input type="text" placeholder="Username" />
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Password" />
                <input type="submit" class="btn" value="Register" />
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- footer -->
<?php include("./includes/footer.php")?>
