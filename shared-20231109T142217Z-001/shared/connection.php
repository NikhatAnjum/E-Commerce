<?php
$conn=new mysqli("localhost","root","","acme23_may");
if($conn->connect_error)
{
    echo "Error in SQL Connection";
    die;
}