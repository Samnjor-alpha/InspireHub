<?php
$getproducts=mysqli_query($conn,"SELECT * FROM products");
function checkproductexists($pname,$pcateg): bool
{
    global $conn;
    $getdata=mysqli_query($conn,"select * from products where pname='$pname' and pcateg='$pcateg'");

    if (mysqli_num_rows($getdata)>0){
        return true;
    }else{
        return false;
    }

}
function getproductcategory($category): string
{
    if ($category=="Web App"){
return '<i class="fas fa-globe"></i>';
    }else{
        return '<i class="fas fa-mobile-alt"></i>';
    }
}
function getproductimg($pid){
    global $conn;
    $getdata=mysqli_query($conn,"select images from p_images where p_id='$pid'");

    return mysqli_fetch_assoc($getdata)['images'];
}