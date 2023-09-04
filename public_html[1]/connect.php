<?php

if ($_SERVER['REQUEST_METHOD']=='POST') {
    $server ="127.0.0.1:3306";
    $uname = "u570986229_Easy2learning";
    $pass="Easy2learning";
    $dbname="u570986229_Easy2learning";
    $con = mysqli_connect($server,$uname,$pass,$dbname);
    if($con){
        echo "";
    
    }
    else{
        echo "connection failed";
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

$sql = "INSERT INTO `connect` (`Full Name`, `Email Id`, `Mobile Number`) VALUES ('$name', '$email', '$mobile')";
$data = mysqli_query($con,$sql);
            
if ($data){
    echo "Data is send";
}
else{
    echo "data is not send";
}

}


?>

