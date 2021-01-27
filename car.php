<?php include("./global/db.php")?>
<?php include("./includes/header.php")?>

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
