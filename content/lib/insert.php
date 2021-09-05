<?php
//connect db
$con = mysqli_connect('localhost','root','','myform');
//check connection
if(mysqli_connect_errno()){
    echo ("connection error".mysqli_connect_error());
}

$data = json_decode(file_get_contents("php://input"));

$userName= mysqli_real_escape_string($con,$data->userName);
$indexNo= mysqli_real_escape_string($con,$data->userIndex);
$email= mysqli_real_escape_string($con,$data->userEmail);
/*
$userName = $_REQUEST('userName');
$indexNo = $_REQUEST('userIndex');
$email = $_REQUEST('userEmail');



//test
$userName='achii';
$indexNo='194171M';
$email = 'abc@gmail.com';
*/
$sql = "INSERT INTO user_data VALUES('$indexNo','$userName','$email')";

if(mysqli_query($con,$sql)){
    
    echo("success");

}
else{
    echo("error");
}


?>