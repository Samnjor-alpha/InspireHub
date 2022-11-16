<?php
function active($currect_page): void
{
    $url_array =  explode('/', $_SERVER['PHP_SELF']) ;
    $url = end($url_array);
    if($currect_page == $url){
        echo 'active'; //class name in css
    }
}
function preparedby($prepared_by)
{ global $conn;

    $getuser=mysqli_query($conn,"select names from admins where id='$prepared_by'");

    return mysqli_fetch_assoc($getuser)['names'];

}
function checkreportdate($rprtDate){
    $current = strtotime(date("Y-m-d"));
    $date    = strtotime($rprtDate);

    $datediff = $date - $current;
    $difference = floor($datediff/(60*60*24));
    if($difference==0)
    {
        echo 'Today';
    }
    else if($difference > 1)
    {
        echo date('D,d.M.Y',strtotime($rprtDate));
    }
    else if($difference > 0)
    {
        echo 'Tomorrow';
    }
    else if($difference < -1)
    {
        echo date('D,d.M.Y',strtotime($rprtDate));
    }
    else
    {
        echo 'yesterday';
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
    $sql=mysqli_query($conn,"select * from admins where email='$email' or p_email='$email'");
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

function checkworkemail($email): bool
{
    
        $static=Array('sales@inspirehub.co.ke','production@inspirehub.co.ke'
        ,'support@inspirehub.co.ke','md@inspirehub.co.ke', 'technical@inspirehub.co.ke');




            // If value is not in static collection is an addition...
            if(!in_array($email, $static)) {
                return false;
            }else{
                return true;
            }


    
}
function verifyworkmail($email): bool
{
    $allowed_domains = array("inspirehub.co.ke");
    $explode=explode("@", $email);
    $email_domain = array_pop($explode);
    if(!in_array($email_domain, $allowed_domains)) {
        return false;
    }else{
        return true;
    }
}