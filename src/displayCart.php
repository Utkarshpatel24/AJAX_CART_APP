<?php 
session_start();
include "config.php";
display();

function display()
    {
       $cartDisplay="";
       $totalprice=0;
       $cartDisplay="<table><tr><th>product id</th><th>product name</th><th>product price</th><th>product quantity</th><th>total price</th><th>Action</th></tr>";
      foreach($_SESSION['cartArray'] as $product)
       {
          
         // $cartDisplay.="<tr><td>".$product['id']."</td><td>".$product['name']."</td><td>".$product['price']."</td><td><input name='input' value='".$product['quantity']."'><a href='editQuantity.php?id=".$product['id']."'>Edit</a></td><td>".$product['price'] * $product['quantity']."</td><td><a href='deleteProduct.php?id=".$product['id']."'>Delete</a></td></tr>";
          $cartDisplay.="<tr><td>".$product['id']."</td><td>".$product['name']."</td><td>".$product['price']."</td><td><form action='editQuantity.php' method='post'><input style='display:none' name='input1' value='".$product['id']."'><input name='input11' placeholder='".$product['quantity']."'><button>Edit</button></form></td><td>".$product['price'] * $product['quantity']."</td><td><a href='deleteProduct.php?id=".$product['id']."'>Delete</a></td></tr>";
          $totalprice+=$product['price'] * $product['quantity'];
       }

   
       $cartDisplay.="</table>";
       $cartDisplay.="<br><h1> Total Price to Pay = ".$totalprice."</h1>";
       $cartDisplay.="<br><h1><a href='emptyCart.php' > EMPTY CART </a> </h1>";
       $_SESSION['display']=$cartDisplay;
     
    }
?>