<?php
 $name = $_POST['full_Name'];
 $email = $_POST["Email"];
 $phone = $_POST["Phone"];
 $city = $_POST["city"];

 $con = mysqli_connect("localhost","root","","stu_info") or die("Connection Failed");

 $sql = "INSERT INTO student(NAME, EMAIL,PHONE_NO,CITY) VALUES ('{$name}','{$email}','{$phone}','{$city}')";
 
 if(mysqli_query($con, $sql)){
   echo 1;
 }else{
   echo 0;
 }
?>