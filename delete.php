<?php
include('config.php');

if(isset($_GET['id'])){
    $id =$_GET['id'];
	$sql = "DELETE FROM users WHERE id=$id";

    if (mysqli_query($con, $sql)) {
    header("Location: index.php"); 
    }   
}
?>