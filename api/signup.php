<?php

require("../includes/db_connect.php");

$full_name=$_POST['full_name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];
$college_name=$_POST['college_name'];
$gender=$_POST['gender'];

$sql="select * FROM users WHERE email='$email'";
$result=mysqli_query($conn,$sql);
if (!$result) {
        $response = array("success" => false, "message" => "Something went wrong!");
        echo json_encode($response);
        return;
}
$num1=mysqli_num_rows($result);

if ($num1!=0) {
        $response = array("success" => false, "message" => "This email id is already registered with us!");
        echo json_encode($response);
        return;

}
    $sql = "INSERT INTO `pglife`.`users` (`full_name`, `phone`, `email`, `password`, `college_name`, `gender`) 
VALUES ('$full_name', '$phone', '$email', '$password', '$college_name', '$gender');";
    $result = mysqli_query($conn, $sql);
if (!$result) {
        $response = array("success" => false, "message" => "Something went wrong!");
        echo json_encode($response);
        return;
}
    $response = array("success" => true, "message" => "Your account has been created successfully!");
    echo json_encode($response);
mysqli_close($conn);


