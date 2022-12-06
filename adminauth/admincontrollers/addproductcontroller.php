<?php
$getproducts=mysqli_query($conn,"SELECT * FROM products");
if (isset($_GET['product'])&& isset($_GET['id'])){
    if (password_verify($_GET['id'],$_GET['product'])){
        $getproduct=mysqli_query($conn,"select * from products where id='".$_GET['id']."'");
        $getimages=mysqli_query($conn,"select * from p_images where p_id='".$_GET['id']."' ");
        if (mysqli_num_rows($getproduct)<1){
            header('location:index.php');
        }else{
            $rowp=mysqli_fetch_assoc($getproduct);
            $rowcount = mysqli_num_rows($getimages);
            mysqli_query($conn,"update products set pviews=pviews+1 where id='".$_GET['id']."'");

        }
    }
}

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
function getfilter($categ){
    if ($categ=="Web App"){
        return "filter-web";
    }else{
        return "filter-app";
    }
}
function getpurl($url): string
{
    if (is_null($url)){
        return "N/A";
    }else{
        return "<a target='_blank' href='".$url."'><i class='fas fa-external-link-alt' title='Visit'></i></a>";
    }
}