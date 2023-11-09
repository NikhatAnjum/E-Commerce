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
        function confirmDelete(pid){
            res=confirm("Are you sure want to delete product="+pid);
            if(res){
                window.location=`deletepdt.php?pid=${pid}`;
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
$sql_cursor=mysqli_query($conn,"select * from product where uploaded_by=$userid");
while($row=mysqli_fetch_assoc($sql_cursor)){
    $pid=$row['pid'];
    $name=$row['name'];
    $details=$row['details'];
    $price=$row['price'];
    $impath=$row['impath'];

    echo "<div class='card'>
    
    <div class='card-body'>
    <h5 class='card-title'>$name</h5>
    <div class='price'>$price</div>
    <div class='pdtimg-cointainer'>
    <img class='pdtimg' src='$impath'>
    </div>
    <div class='card-text'>$details</div>
    <div class='mt-2 d-flex gap-3'>
    <a href=update.html>
    <button  class='btn btn-warning'>Edit</button>
 </a>
    <button onclick='confirmDelete($pid)' class='btn btn-danger'>Delete</button>
 
    </div>
    </div>
    
    </div>";
}
?>
