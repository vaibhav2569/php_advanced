<?php
include '../config.php';
session_start();
if(isset($_GET)){
$stmt = "SELECT * from `users` where `email`='$_GET[email]' and `pswd`='$_GET[pswd]'";
$result = mysqli_query($conn, $stmt);
if(mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $str=$row['id'].".".$row['name'].".".$row['email'].".".$row['pswd'];
   $_SESSION['detail']=base64_encode($str);
   header('location:../showData.php');   
}else{
    header('location:../task4.php'); 
}
}