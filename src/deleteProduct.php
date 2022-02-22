<?php
include 'config.php';
  if(isset($_POST))
  {
      session_start();
      $id=$_POST['id'];
      //echo "<h1>".$id."</h1>";
      //echo "delete start";
      deleteProduct($id);
     // echo "delete done";
      echo json_encode($_SESSION['cartArray']);
    //   include "displayCart.php";
    //   display();
    //   header("Location:products.php");
  }


  function deleteProduct($id)
    {
        
        foreach($_SESSION['cartArray'] as $key=>$product)
        {
            if($id==$product['id'])
            array_splice($_SESSION['cartArray'],$key,1);
            //unset($_SESSION['cartArray'][$key]);
        }
        
    }



?>