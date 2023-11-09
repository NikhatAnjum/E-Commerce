<?php

$uname=$_POST['username'];
$upass=$_POST['password'];
$utype=$_POST['user_type'];
$encpass=md5($upass);
//  $conn=new mysqli("localhost","root","","acme23_may");
 include_once "connection.php";
$status=mysqli_query($conn,"insert into user(username,password,user_type) values('$uname','$encpass','$utype')");
if($status){
    echo "Registration Successfull";
}
else{
    echo "Error in Registration";    
    echo mysqli_error($conn);
}


?>