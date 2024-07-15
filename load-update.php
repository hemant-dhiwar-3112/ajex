<?php

$id = $_POST["id"];

$con = mysqli_connect("localhost", "root", "", "stu_info") or die("Connection Failed");


echo $id;

$sql = "SELECT * FROM student WHERE ID = '$id'";
$result = mysqli_query($con, $sql) or die("SQL Query Failed.");
$output = "";
if(mysqli_num_rows($result) > 0 ){

  while($row = mysqli_fetch_assoc($result)){
    $output .= "<tr>
      <td width='90px'>Name</td>
      <td><input type='text' id='name' value='{$row["NAME"]}'>
          <input type='text' id='id' hidden value='{$row["ID"]}'>
      </td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input type='text' id='email' value='{$row["EMAIL"]}'></td>
    </tr>
    <tr>
    <td>Phone</td>
    <td><input type='text' id='phone' value='{$row["PHONE_NO"]}'></td>
  </tr>
  <tr>
  <td>City</td>
  <td><input type='text' id='city' value='{$row["CITY"]}'></td>
</tr>
    <tr>
      <td></td>
      <td><input type='submit' id='edit-submit' value='save'></td>
    </tr>";

  }

    mysqli_close($con);

    echo $output;
}else{
    echo "<h2>No Record Found.</h2>";
}

?>
