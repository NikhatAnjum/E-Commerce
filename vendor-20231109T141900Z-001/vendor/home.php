<?php
include_once "authguard.php";
include "menu.html";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  
</head>
<body>

 <div class="d-flex justify-content-center align-items-center vh-100"> 
    <form action="upload.php" class="bg-success p-4" method="POST" enctype="multipart/form-data">
        <div class="text-center text-white">
            <h4 >Upload Products</h4>
        </div>
        <input type="text" placeholder="Product Name" name="name" class="form-control mt-2">
        <input type="number" placeholder="Product Price" name="price" class="form-control mt-2">
        <textarea name="details" cols="30" rows="5" placeholder="product description..." class="form control mt-2"></textarea>
        <input type="file" name="pdtimg" class="form-control mt-2 ">

         <div class="text-center">
        <button class="btn btn-warning mt-3">Upload</button>
        </div>
         
    </form>
</div>


</body>
</html>