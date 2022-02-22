<?php
session_start();
if(isset($_POST))
{
    
    // $edited_quantity=$_POST['input11'];
    // $id=$_POST['input1'];
    $edited_quantity=$_POST['quantity'];
    $id=$_POST['id'];

    edit($id,$edited_quantity);
    echo json_encode($_SESSION['cartArray']);
    // include "displayCart.php";
    //  display();
     
    // header("Location:products.php");
}

 function edit($id,$edited_quantity)
 {
     foreach($_SESSION['cartArray'] as $key=>$product)
     {
         if($product['id']==$id)
         {
             $_SESSION['cartArray'][$key]['quantity']=$edited_quantity;
             
             return;
         }
     }
 }
?>