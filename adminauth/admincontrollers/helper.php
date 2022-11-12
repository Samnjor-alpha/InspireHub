<?php
function active($currect_page): void
{
    $url_array =  explode('/', $_SERVER['PHP_SELF']) ;
    $url = end($url_array);
    if($currect_page == $url){
        echo 'active'; //class name in css
    }
}
function obfuscate_email($email): string
{
    $em   = explode("@",$email);
    $name = implode('@', array_slice($em, 0, count($em)-1));
    $len  = floor(strlen($name)/2);

    return substr($name,0, $len) . str_repeat('*', $len) . "@" . end($em);
}
function checkifemailexists($email): bool
{
    global $conn;
    $sql=mysqli_query($conn,"select * from admins where email='$email'");
    if (mysqli_num_rows($sql)>0){
        return true;
    }else{
        return false;
    }

}

function checkaccount(){
    global $conn;
    $sql=mysqli_query($conn,"select * from admins");
    if (mysqli_num_rows($sql)>0) {
        return true;
    }else{
        return false;
    }
}