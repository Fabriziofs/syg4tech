<?php 
include("./global/config.php");

session_start();

if(isset($_POST['btnAccion'])){

  switch($_POST['btnAccion']){

    case 'addToCart':
      if(is_numeric(openssl_decrypt($_POST['id'], COD, KEY))){
        $id_decrypted = openssl_decrypt($_POST['id'], COD, KEY);
        $message_id = "Ok ID correcto ".$id_decrypted;
      }
      else{
        $message_id = "Upss.. ID incorrecto ".$id_decrypted;
      }

      if(is_string(openssl_decrypt($_POST['name'], COD, KEY))){
        $name_decrypted = openssl_decrypt($_POST['name'], COD, KEY);
        $message_name = "Ok nombre correcto ".$name_decrypted;
      }
      else{
        $message_name = "Upss.. nombre incorrecto ".$name_decrypted;
      }

      if(is_numeric(openssl_decrypt($_POST['price'], COD, KEY))){
        $price_decrypted = openssl_decrypt($_POST['price'], COD, KEY);
        $message_price = "Ok precio correcto ".$price_decrypted;
      }
      else{
        $message_price = "Upss.. precio incorrecto ".$price_decrypted;
      }
      if(is_numeric(openssl_decrypt($_POST['quantity'], COD, KEY))){
        $quantity_decrypted = openssl_decrypt($_POST['quantity'], COD, KEY);
        $quantity_price = "Ok cantidad correcta ".$quantity_decrypted;
      }
      else{
        $message_quantity = "Upss.. cantidad incorrecto ".$quantity_decrypted;
      }
      if(is_string(openssl_decrypt($_POST['image'], COD, KEY))){
        $image_decrypted = openssl_decrypt($_POST['image'], COD, KEY);
        $message_image = "Ok imagen correcta ".$image_decrypted;
      }
      else{
        $message_image = "Upss.. imagen incorrecta ".$image_decrypted;
      }

      if(!isset($_SESSION['SHOP_CART'])){
        $product=array(
          'id' => $id_decrypted,
          'name' => $name_decrypted,
          'price' => $price_decrypted,
          'quantity' => $quantity_decrypted,
          'image' => $image_decrypted
        );
        $_SESSION['SHOP_CART'][0] = $product;
      } 

      else {
        $numberOfProducts = count($_SESSION['SHOP_CART']);
        $product=array(
          'id' => $id_decrypted,
          'name' => $name_decrypted,
          'price' => $price_decrypted,
          'quantity' => $quantity_decrypted,
          'image' => $image_decrypted
        );
        $_SESSION['SHOP_CART'][$numberOfProducts] = $product;
      }

    break;
  }
}
?>
