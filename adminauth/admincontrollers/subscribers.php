<?php
$getsubscribers=mysqli_query($conn,'select * from subscribers');
function checknewsubscriber(): bool
{
    global $conn;
    $getdata=mysqli_query($conn,"select * from subscribers where status='0'");
    if (mysqli_num_rows($getdata)>0){
        return true;
    }else{
        return  false;
    }
}

function getnewmails(): array
{

    global $conn;

    $getemails=mysqli_query($conn,"select email from subscribers");

    $returnData = array(); // Simply do this. Don't need all index fields
    $index = 0;
    while($row = $getemails->fetch_assoc()){
        $returnData[$index] = $row['email'];
        $index++;
    }
    return $returnData;


}
function getallmails(): array
{

    global $conn;

    $getemails=mysqli_query($conn,"select email from subscribers");
    
    $returnData = array(); // Simply do this. Don't need all index fields
    $index = 0;
    while($row = $getemails->fetch_assoc()){
        $returnData[$index] = $row['email'];
        $index++;
    }
    return $returnData;


}