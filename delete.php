<?php
include 'dbconnection.php';
//start_session();

$id=$_GET['id'];
$sql="DELETE FROM `insert` WHERE id=$id";
$result=mysqli_query($conn,$sql);
if($result){
    header("Location:index.php?msg=record deleted successfully");

}else{
    echo "failed";
}

?>