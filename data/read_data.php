<?php

header("Access-Control-Allow-Origin: *");

include("dbconnect.php");
$sql="SELECT * FROM water";
$result=mysqli_query($connect,$sql);

$data = array();
while ($row = mysqli_fetch_object($result))
{
    array_push($data, $row);
}

echo json_encode($data);
?>
