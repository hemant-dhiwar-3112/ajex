<?php

$ID = $_POST["id"];

$con = mysqli_connect("localhost", "root", "", "stu_info") or die("Connection Failed");
$sql = "DELETE FROM student WHERE ID = $ID";

mysqli_query($con, $sql);


?>