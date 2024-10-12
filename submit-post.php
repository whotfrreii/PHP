<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>POST Data Received</title>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">POST Data Received</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $given_name = htmlspecialchars($_POST['given_name_post']);
            $middle_name = htmlspecialchars($_POST['middle_name_post']);
            $last_name = htmlspecialchars($_POST['last_name_post']);
            $dob = htmlspecialchars($_POST['dob_post']);
            $course = htmlspecialchars($_POST['course_post']);

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
