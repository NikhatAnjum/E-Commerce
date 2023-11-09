 <?php
$pid=$_GET['pid'];
include_once "../shared/connection.php";
$status=mysqli_query($conn,"delete from product where pid=$pid");
if($status)
{
    header("location:view.php");
}
else{
    echo mysqli_error($conn);
}
?> 