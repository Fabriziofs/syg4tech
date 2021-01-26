<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./main.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />
    <title>Syga4Tech</title>
  </head>
  <body>
    <div class="container">
      <div class="navbar">
        <div class="logo">
          <img
            src="./assets/logo.png"
            alt="logo-icon"
            width="50px"
            height="30px"
          />
        </div>
        <nav>
          <ul id="menuItems">
          <li><a href="./index.php">Home</a></li>
          <li><a href="./account.php">Account</a></li>
          </ul>
        </nav>
        <img
          src="./assets/shopping-cart.png"
          alt="shopping-cart-icon"
          width="25px"
          height="25px"
        />
        <img
          class="menu-icon"
          onclick="menuToggle()"
          src="./assets/menu.png"
          alt="logo-icon"
          height="25px"
        />
      </div>
    </div>

    <!-- car items details -->

    <div class="small-container cart-page">
      <table>
        <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>Subtotal</th>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img
                src="./assets/products-img/1193-asus-prime-b550m-a.jpg"
                alt=""
              />
              <div>
                <p>Asus prime b550m</p>
                <small>Price: 50.00€</small>
                <br />
                <a href="">Remove</a>
              </div>
            </div>
          </td>
          <td><input type="numer" value="1" /></td>
          <td>50.00€</td>
        </tr>
      </table>

      <div class="total-price">
        <table>
          <tr>
            <td>Total</td>
            <td>200.00€</td>
          </tr>
        </table>
      </div>
    </div>

<!-- footer -->
<?php include("./includes/footer.php")?>
  </body>
</html>
