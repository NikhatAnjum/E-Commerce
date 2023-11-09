<?php

 include "authguard.php";
 $userid=$_SESSION['userid'];

$name=$_POST['name'];

$price=$_POST['price'];
$details=$_POST['details'];
$pid=$_POST['pid'];
echo "<br>";
// print_r($_FILES);

 print_r($_FILES['pdtimg']['tmp_name']);
 $dest_file_path="../shared/images/".$_FILES['pdtimg']['name'];
 move_uploaded_file($_FILES['pdtimg']['tmp_name'],$dest_file_path);
include_once "../shared/connection.php";
$status=mysqli_query($conn,"update product set name='$name' price='$price',details='$details' where pid=$pid");
if($status)
{
    echo"product update successfully!";
}
else{
    echo mysqli_error($conn);
}



?>
