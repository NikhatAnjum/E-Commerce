<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .card{
            width:300px;
            display:inline-block !important;
            margin:10px;
        }
        .pdtimg-container{
            width:100%;
        }
        .pdtimg{
            width:100%;
        }
        price{
            font-size:24px;
            color:violet;
        }
        .price::before{
            content:"Rs ";
        }
        </style>
</head>
<body>
     <script>
        function confirmDelete(cartid){
            res=confirm("Remove product from cart");
            if(res){
                window.location=`deletecart.php?cartid=${cartid}`;
            }
        }
        </script>
</body>
</html>
<?php
include "authguard.php";
include "menu.html";

$userid=$_SESSION['userid'];

include_once "../shared/connection.php";
$sql_cursor=mysqli_query($conn,"select * from cart join product on cart.pid=product.pid where userid=$userid");
$total=0;
while($row=mysqli_fetch_assoc($sql_cursor)){
    $cartid=$row['cartid'];
    $pid=$row['pid'];
    $name=$row['name'];
    $details=$row['details'];
    $price=$row['price'];
    $impath=$row['impath'];
    $total+=$price;
    echo "<div class='card'>
    
    <div class='card-body'>
    <h5 class='card-title'>$name</h5>
    <div class='price'>$price</div>
    <div class='pdtimg-cointainer'>
    <img class='pdtimg' src='$impath'>
    </div>
    <div class='card-text'>$details</div>
    <div class='mt-2 d-flex gap-3'>
    
  
    <button onclick='confirmDelete($cartid)' class='btn btn-danger'>Remove from cart</button>
 
    </div>
    </div>
    
    </div>";
}
echo "<div>
<div class='display-2'> RS $total</div>
<a href=placeorder.php>
<button>Place order</button>
</a>
<div>";
