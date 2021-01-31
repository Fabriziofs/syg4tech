<?php 
include("./global/config.php");
session_start();

if(isset($_POST['btnAccion'])){

  switch($_POST['btnAccion']){

    case 'addToCart':
      if(is_numeric(openssl_decrypt($_POST['id'], COD, KEY))){
        $id_decrypted = openssl_decrypt($_POST['id'], COD, KEY);
      }

      if(is_string(openssl_decrypt($_POST['name'], COD, KEY))){
        $name_decrypted = openssl_decrypt($_POST['name'], COD, KEY);
      }


      if(is_numeric(openssl_decrypt($_POST['price'], COD, KEY))){
        $price_decrypted = openssl_decrypt($_POST['price'], COD, KEY);
      }

      if(is_numeric($_POST['quantity'])){
        $quantity_decrypted = $_POST['quantity'];
      }

      if(is_string(openssl_decrypt($_POST['image'], COD, KEY))){
        $image_decrypted = openssl_decrypt($_POST['image'], COD, KEY);
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

        $idProducts = array_column($_SESSION['SHOP_CART'], 'id');
        if(in_array($id_decrypted, $idProducts)){
          
          foreach($_SESSION['SHOP_CART'] as $index=>$product){
            if($product['id'] == $id_decrypted){
              $product=array(
                'id' => $id_decrypted,
                'name' => $name_decrypted,
                'price' => $price_decrypted,
                'quantity' => $product['quantity'] + $quantity_decrypted,
                'image' => $image_decrypted
              );
            }
          }
          $_SESSION['SHOP_CART'][$numberOfProducts - 1] = $product;
        } 
        else{
          $product=array(
            'id' => $id_decrypted,
            'name' => $name_decrypted,
            'price' => $price_decrypted,
            'quantity' => $quantity_decrypted,
            'image' => $image_decrypted
          );
          $_SESSION['SHOP_CART'][$numberOfProducts] = $product;
        }
      }
      break;

    case 'deleteFromCart':
      if(is_numeric(openssl_decrypt($_POST['id'], COD, KEY))){
        $id_decrypted = openssl_decrypt($_POST['id'], COD, KEY);
        foreach($_SESSION['SHOP_CART'] as $index=>$product){
          if($product['id']==$id_decrypted){
            unset($_SESSION['SHOP_CART'][$index]);
          }
        }
      }
      else{
        $message_id = "Upss.. ID incorrecto ".$id_decrypted;
      }
      break;
  }
}
?>
