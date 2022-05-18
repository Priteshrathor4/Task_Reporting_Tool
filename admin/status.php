<?php
include("connection.php");
$id=$_GET[0];
// echo $id;
$status=$_GET['status'];
// echo $status;
$query="UPDATE regdetails SET status=$status WHERE id=$id";
if(pg_query($db,$query))
{
    echo "Successfully Updated";
}
else{
    echo "Error";
}
header('Location:index.php');
?>