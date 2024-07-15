<?php $con = mysqli_connect("localhost", "root", "", "stu_info") or die("failed");
$sql1 = "select * from student";
$result1 = mysqli_query($con, $sql1) or die("not database");

$total_record = mysqli_num_rows($result1);

$page_limit = 4;
$page = "";
if (isset($_POST['page'])) {
    $page = $_POST['page'];
} else {
    $page = "1";
}


$offset = ($page - 1) * $page_limit;

$total_pages = ceil($total_record / $page_limit);


$sql = "select * from student limit {$offset},{$page_limit}";
$result = mysqli_query($con, $sql) or die("not database");

$output = "";

$output .= '   <div class="row mt-2"> <table class="table  table-sm mt-2  table-striped table-bordered">
                <thead>
                    <tr class="table-dark">
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone No</th>
                        <th scope="col">City</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>';
$a = 1;
while ($row1 = mysqli_fetch_array($result)) {
    $output .= '<tbody>
        <tr><th scope="row">' .
        $a++ . '
         </th><td>' . $row1['NAME'] .
        '</td><td>'
        . $row1['EMAIL'] .
        '</td><td>'
        . $row1['PHONE_NO'] .
        ' </td><td>'
        . $row1['CITY'] .
        '</td>
        <td> <button class="btn btn-danger" id="edit" data-id="'.$row1['ID'].'">Edit</button></td>
        <td>  <button class="btn btn-success" id="del" data-id="'.$row1['ID'].'">Delete</button></td>
        </tr>
        </tbody>';
}
$output .= '</table>  </div>
<div class="row">
    <div class="col-3 offset-5  mb-2">
        <ul class="pagination">';
for ($i = 1; $i <= $total_pages; $i++) {
    if ($i == $page) {
        $class_name = "active";
    } else {
        $class_name = "";
    }
    $output .= "<li class='{$class_name} page-item'><a class=' page-link sele' id='{$i}' href=''>{$i}</a>";


}
$output .= '</div>
    </div>';

echo $output;
?>