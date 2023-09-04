<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
$servername ="127.0.0.1:3306";
$username = "u570986229_Easy2learning";
$password="Easy2learning";
$dbname="u570986229_Easy2learning";
$con = mysqli_connect($servername,$username,$password,$dbname);
if($con){
    
    echo "";

}
else{
    echo "connection failed".mysqli.error();
}
$name=$_POST['Full_Name'];
$email=$_POST['Email'];
$details=$_POST['details'];

if (isset($_FILES['pdf_file']['name']))
{  

$file_name = $_FILES['pdf_file']['name'];
$file_tmp = $_FILES['pdf_file']['tmp_name'];


move_uploaded_file($file_tmp,"./Resume/".$file_name);
    $sql = "INSERT INTO `faculty` (`name`, `email`, `resume`, `Details`) VALUES ('$name', '$email', '$file_name', '$details')";
    $res = mysqli_query($con,$sql);
    
    if ($res) {
       echo "Your application Submited";
    }


}
}
else {
    echo 'Application Not submited';

}     


?>