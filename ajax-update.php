<?php
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST["email"];
$phone = $_POST["phone"];
$city = $_POST["city"];

$con = mysqli_connect("localhost", "root", "", "stu_info") or die("Connection Failed");

$sql = "UPDATE student SET NAME = '{$name}',EMAIL = '{$email}', PHONE_NO = '{$phone}',CITY = '{$city}' WHERE ID = '{$id}'";


if (mysqli_query($con, $sql)) {
    echo 1;
} else {
    echo 0;
}
?>