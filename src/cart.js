$(document).ready(function(){

    $('#products').on("click","#add_to_cart_button",function(e){
        e.preventDefault();
        console.log($(this).data('id'));

        $.ajax({
            url:'addToCart.php',
            method:"POST",
            data:{
                id:$(this).data('id')
            },
            dataType:'JSON'

        }).done(function(data){
            console.log(data[0].id);
            console.log('good');
            displayCart(data);
        });
    })

    $('#table').on("click","#delete_link",function(e){
        e.preventDefault();
        console.log("delete link clicked");
        console.log($(this).data('id'));
        $.ajax({
            url:'deleteProduct.php',
            method:'POST',
            data:{
                id:$(this).data('id')
            },
            dataType:"JSON"

        }).done(function(data){
            displayCart(data);
        });

    });

    $('#table').on('click','#emptyCart_link',function(e){
         e.preventDefault();
         $.ajax({
             url:'emptyCart.php',
             dataType:'JSON'
         }).done(function(data){
             displayCart(data);
         })
    });


    $('#table').on("click","#edit_button",function(e){
        e.preventDefault();
        $id=$(this).data('id');
        console.log($id);
        console.log($(`#edit_quantity_field${$id}`).val());
        $new_quantity=$(`#edit_quantity_field${$id}`).val();
        $.ajax({
            url:'editQuantity.php',
            method:"POST",
            data:{
                id:$id,
                quantity:$new_quantity
            },
            dataType:"JSON"
        }).done(function(data){
            displayCart(data);
        })
        
    })

})

function displayCart(data)
{
    var cartDisplay="";
    var totalprice=0;

    cartDisplay+=`<table><tr><th>product id</th><th>product name</th><th>product price</th><th>product quantity</th><th>total price</th><th>Action</th></tr>`;
    for(i=0;i<data.length;i++)
    {
        cartDisplay+=`<tr><td>${data[i].id}</td><td>${data[i].name}</td><td>${data[i].price}</td><td><form action='editQuantity.php' method='post'><input style='display:none' name='input1' value='${data[i].id}'><input id='edit_quantity_field${data[i].id}' name='input11' placeholder='${data[i].quantity}'><button id='edit_button' data-id='${data[i].id}'>Edit</button></form></td><td>${data[i].price * data[i].quantity}</td><td><a id='delete_link' data-id='${data[i].id}' href='deleteProduct.php?id=".$product['id']."'>Delete</a></td></tr>`;
        totalprice+=data[i].price*data[i].quantity;
    }
    cartDisplay+=`</table>`;
    cartDisplay+=`<br><h1> Total Price to Pay = ${totalprice}</h1>`;
    cartDisplay+=`<br><h1><a id='emptyCart_link' href='emptyCart.php' > EMPTY CART </a> </h1>`;
    $('#table').html(cartDisplay);
}