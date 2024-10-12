<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>GET Data Received</title>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">GET Data Received</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $given_name = htmlspecialchars($_GET['given_name_get']);
            $middle_name = htmlspecialchars($_GET['middle_name_get']);
            $last_name = htmlspecialchars($_GET['last_name_get']);
            $dob = htmlspecialchars($_GET['dob_get']);
            $course = htmlspecialchars($_GET['course_get']);

            echo '<div class="card p-4 shadow-sm">';
            echo '<h5 class="card-title">Submitted Information</h5>';
            echo '<div class="list-group">';
            echo '<div class="list-group-item">Given Name: <strong>' . $given_name . '</strong></div>';
            echo '<div class="list-group-item">Middle Name: <strong>' . $middle_name . '</strong></div>';
            echo '<div class="list-group-item">Last Name: <strong>' . $last_name . '</strong></div>';
            echo '<div class="list-group-item">Date of Birth: <strong>' . $dob . '</strong></div>';
            echo '<div class="list-group-item">Course: <strong>' . $course . '</strong></div>';
            echo '</div>';
            echo '</div>';
        } else {
            echo '<div class="alert alert-warning" role="alert">No data received.</div>';
        }
        ?>
        <a href="form.php" class="btn btn-primary mt-3">Go Back to Form</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
