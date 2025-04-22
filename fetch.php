<?php
include('config.php'); // Assuming config.php contains the database connection setup

$sql = "SELECT * FROM users";
$result = mysqli_query($con, $sql); // Make sure you're using the correct connection variable ($con)

    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>";
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>" . $row["id"]. "</td>
                            <td>" . $row["name"]. "</td>
                            <td>" . $row["email"]. "</td>
                        </tr>";
                }
        echo "</table>";
    } else {
        echo "0 results";
    }

// Close the database connection
mysqli_close($con);
?>