
<?php
include('config.php'); // Assuming config.php contains the database connection setup

$sql = "SELECT id, name, email FROM users";
$result = mysqli_query($con, $sql); // Make sure you're using the correct connection variable ($con)

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}
?>
