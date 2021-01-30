<?php
include("./includes/header.php");
include("./global/config.php");
include("./cart.php");
?>
  <!-- car items details -->
    <div class="small-container cart-page">
    <?php if(!empty($_SESSION['SHOP_CART'])){ ?>
      <table>
        <tr>
          <th>Producto</th>
          <th>Cantidad</th>
          <th>Subtotal</th>
        </tr>
        <?php $total=0; ?>
        <?php foreach($_SESSION['SHOP_CART'] as $index=>$product){?>
        <tr>
          <td>
            <!-- Detalles producto -->
            <div class="cart-info">
              <img
                src="<?php echo $product['image']?>"
                alt="product-image"
              />
              <div>
                <p><?php echo $product['name']?></p>
                <small>Precio: <?php echo $product['price']?>€</small>
                <br />
                <form action="" method="POST">
                <input type="hidden" name="id"  value="<?php echo openssl_encrypt($product['id'],COD,KEY);?>" />
                <button type="submit" name="btnAccion" value="deleteFromCart">Eliminar</button>
                </form>
              </div>
            </div>
            <!-- fin detalles producto  -->
          </td>
          <td>
            <!-- cantidad del producto -->
            <input type="number" value="<?php echo $product['quantity']?>" />
            <!-- fin cantidad del producto -->
          </td>
          <td>
            <!-- precio * cantidad producto -->
            <?php echo number_format($product['price'] * $product['quantity'],2);?>€
            <!--  fin precio * cantidad producto -->
          </td>
        </tr>
        <?php $total=$total+($product['price'] * $product['quantity']); ?>
        <?php } ?>
      </table>

      <div class="total-price">
        <table>
          <tr>
            <td>Total</td>
            <td><?php echo number_format($total,2);?>€</td>
          </tr>
        </table>
      </div>
      <?php } else {?>
        <h2>No hay nada en el carrito por el momento...</h2>
        <?php print_r($_SESSION); ?> 
        <?php } ?>
    </div>

<!-- footer -->
<?php include("./includes/footer.php")?>
  </body>
</html>
