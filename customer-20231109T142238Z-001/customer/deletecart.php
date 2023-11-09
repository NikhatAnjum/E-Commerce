<?php
$cartid=$_GET['cartid'];
include_once "../shared/connection.php";
$status=mysqli_query($conn,"delete from cart where cartid=$cartid");
if($status)
{
    header("location:home.php");
}
else{
    echo mysqli_error($conn);
}
?> 