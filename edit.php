<?php
include("config.php");

// Ensure that 'id' is set in the URL query string
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Sanitize the input to prevent SQL injection
    $sql = "SELECT * FROM users WHERE id = $id";
    $query = mysqli_query($con, $sql);

    if (!$query) {
        die("Query failed: " . mysqli_error($con)); // Check for query errors
    }

    $data = mysqli_fetch_assoc($query);

    if (!$data) {
        die("Record not found");
    }
} else {
    die("ID not provided");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Record</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h3>Update Record</h3>
                <div class="card">
                    <div class="card-header">
                        Update New Record
                    </div>
                    <div class="card-body">
                        <form method="POST" action="update.php">
                            <input type="hidden" name="id" value="<?php echo htmlspecialchars($data['id']); ?>">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($data['name']); ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($data['email']); ?>" required>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
