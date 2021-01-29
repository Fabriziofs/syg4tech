<?php include("./includes/header.php")?>
  <!-- car items details -->
    <div class="small-container cart-page">
      <table>
        <tr>
          <th>Producto</th>
          <th>Cantidad</th>
          <th>Subtotal</th>
        </tr>
        <tr>
          <td>
            <!-- Detalles producto -->
            <div class="cart-info">
              <img
                src="./assets/products-img/1193-asus-prime-b550m-a.jpg"
                alt=""
              />
              <div>
                <p>Asus prime b550m</p>
                <small>Precio: 50.00€</small>
                <br />
                <a href="">Remove</a>
              </div>
            </div>
            <!-- fin detalles producto  -->
          </td>
          <td>
            <!-- cantidad del producto -->
            <input type="numer" value="1" />
            <!-- fin cantidad del producto -->
          </td>
          <td>
            <!-- precio * cantidad producto -->
            50.00€
            <!--  fin precio * cantidad producto -->
          </td>
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
