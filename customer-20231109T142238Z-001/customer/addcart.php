<?php
include "authguard.php";
$userid=$_SESSION['userid'];
$pid=$_GET['pid'];
include_once "../shared/connection.php";
$status=mysqli_query($conn,"insert into cart(pid,userid) values($pid,$userid)");
if($status){
    header("location:home.php");
}
else{
    echo mysqli_error($conn);
}
?>