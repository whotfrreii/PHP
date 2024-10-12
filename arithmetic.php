<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Arithmetic Operations</title>
</head>
<style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;500;600;700;800;900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
            font-family: 'Poppins', sans-serif;
        }
        body{
            background-color: #131415;
            color: white;
        }
        .breadcrumb-item > a {
            color: white;
            text-decoration: none;
        }
        .breadcrumb-item > a:hover {
            color: #007BFF;
        }
        .breadcrumb-item + .breadcrumb-item::before {
            content: "/";
            color: #ffffff;
        }
        .breadcrumb-item.active {
            color: #555555;
        }
        .badge {
            font-size: 12px;
            background-color: #555555;
            position: absolute;
        }
    </style>
<body>

    <nav aria-label="breadcrumb">
    <ol class="breadcrumb m-5">
        <li class="breadcrumb-item"><a href="/index.php">Go back to Index</a></li>
        <li class="breadcrumb-item"><a href="/html/form.php">Form Handling</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a>Methods and Functions</a></li>
        <li class="breadcrumb-item"><a href="#">Date Functions</a></li>
    </ol>
    </nav>

    <div class="container mt-5">
        <h4 class="mb-4">Use of Methods and Functions</h4>
        <h1 class="mb-4">Arithmetic Operation</h1>

        <form method="POST" action="">
            <div class="mb-3">
                <label for="number1" class="form-label">Input Number 1:</label>
                <input type="number" class="form-control" id="number1" name="number1" required>
            </div>
            <div class="mb-3">
                <label for="number2" class="form-label">Input Number 2:</label>
                <input type="number" class="form-control" id="number2" name="number2" required>
            </div>
            <button type="submit" name="operation" value="sum" class="btn btn-primary px-5">Sum</button>
            <button type="submit" name="operation" value="subtract" class="btn btn-danger">Subtract</button>
        </form>

        <?php
        function add($num1, $num2) {
            return $num1 + $num2;
        }

        function subtract($num1, $num2) {
            return $num1 - $num2;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number1 = $_POST['number1'];
            $number2 = $_POST['number2'];
            $result = '';

            if ($_POST['operation'] === 'sum') {
                $result = add($number1, $number2);
                echo '<div class="alert alert-success mt-4">Result: <strong>' . $result . '</strong></div>';
            } elseif ($_POST['operation'] === 'subtract') {
                $result = subtract($number1, $number2);
                echo '<div class="alert alert-danger mt-4">Result: <strong>' . $result . '</strong></div>';
            }
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
