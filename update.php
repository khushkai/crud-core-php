<?php
include('config.php');

if(isset($_POST['submit'])){
     $ids=$_POST["id"];
     $name=$_POST["name"];
     $email=$_POST["email"];
     $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$ids";             

    if (mysqli_query($con, $sql)) {
        header("Location: index.php"); 
        exit(); 
    } else {
        echo "Error: " . mysqli_error($con); 
    }
}
?>
