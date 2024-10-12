<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>User Registration Form</title>
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
</head>
<body>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb m-5">
    <li class="breadcrumb-item"><a href="index.php">Go back to Index</a></li>
    <li class="breadcrumb-item active" aria-current="page">Form Handling</li>
    <li class="breadcrumb-item"><a href="arithmetic.php">Methods and Functions</a></li>
    <li class="breadcrumb-item"><a href="#">Date Functions</a></li>
  </ol>
</nav>

<div class="container mt-5">
    <h2>User Registration <span class="badge">POST</span></h2>
    <!-- User Registration Form using POST -->
    <form method="POST" action="/php/submit-post.php">
        <div class="mb-3">
            <label for="givenNamePost" class="form-label">Given Name:</label>
            <input type="text" class="form-control" id="givenNamePost" name="given_name_post" required>
        </div>
        <div class="mb-3">
            <label for="middleNamePost" class="form-label">Middle Name:</label>
            <input type="text" class="form-control" id="middleNamePost" name="middle_name_post">
        </div>
        <div class="mb-3">
            <label for="lastNamePost" class="form-label">Last Name:</label>
            <input type="text" class="form-control" id="lastNamePost" name="last_name_post" required>
        </div>
        <div class="mb-3">
            <label for="dobPost" class="form-label">Date of Birth:</label>
            <input type="date" class="form-control" id="dobPost" name="dob_post" required>
        </div>
        <div class="mb-3">
            <label for="coursePost" class="form-label">Course:</label>
            <select class="form-select" id="coursePost" name="course_post" required>
            <option value="">Select Course</option>
                <!-- Core Tech & Engineering Courses -->
                <option value="Computer Science">Computer Science</option>
                <option value="Information Technology">Information Technology</option>
                <option value="Computer Engineering">Computer Engineering</option>
                <option value="Software Engineering">Software Engineering</option>
                <option value="Electrical Engineering">Electrical Engineering</option>
                <option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
                <option value="Mechanical Engineering">Mechanical Engineering</option>
                <option value="Civil Engineering">Civil Engineering</option>
                <option value="Biomedical Engineering">Biomedical Engineering</option>

                <!-- Data, AI, and Machine Learning -->
                <option value="Data Science">Data Science</option>
                <option value="Artificial Intelligence">Artificial Intelligence</option>
                <option value="Machine Learning">Machine Learning</option>
                <option value="Big Data Analytics">Big Data Analytics</option>
                <option value="Data Engineering">Data Engineering</option>
                
                <!-- Network & Security -->
                <option value="Network Engineering">Network Engineering</option>
                <option value="Cybersecurity">Cybersecurity</option>
                <option value="Information Security">Information Security</option>
                <option value="Cloud Computing">Cloud Computing</option>
                
                <!-- Development (Software, Web, Mobile) -->
                <option value="Web Development">Web Development</option>
                <option value="Mobile App Development">Mobile App Development</option>
                <option value="Game Development">Game Development</option>
                <option value="Full Stack Development">Full Stack Development</option>
                <option value="Blockchain Development">Blockchain Development</option>
                <option value="DevOps Engineering">DevOps Engineering</option>

                <!-- IT Management & Systems -->
                <option value="Information Systems">Information Systems</option>
                <option value="IT Management">IT Management</option>
                <option value="Management Information Systems">Management Information Systems</option>
                <option value="Enterprise Resource Planning (ERP)">Enterprise Resource Planning (ERP)</option>

                <!-- Specializations in Emerging Technologies -->
                <option value="Robotics">Robotics</option>
                <option value="Quantum Computing">Quantum Computing</option>
                <option value="Internet of Things (IoT)">Internet of Things (IoT)</option>
                <option value="Augmented Reality and Virtual Reality">Augmented Reality and Virtual Reality</option>

                <!-- Multimedia and Design -->
                <option value="Digital Media Design">Digital Media Design</option>
                <option value="Graphic Design">Graphic Design</option>
                <option value="Animation">Animation</option>
                <option value="User Experience (UX) Design">User Experience (UX) Design</option>

                <!-- Other Technology-related Courses -->
                <option value="Database Management">Database Management</option>
                <option value="Geographical Information Systems (GIS)">Geographical Information Systems (GIS)</option>
                <option value="Health Informatics">Health Informatics</option>
                <option value="Computational Biology">Computational Biology</option>
        </select>
        </div>
        <button type="submit" class="btn btn-primary px-5">Submit</button>
        <button type="reset" class="btn btn-secondary">Clear</button>
    </form>

    <h2 class="mt-5 mb-4">User Registration <span class="badge">GET</span></h2>
    <!-- User Registration Form using GET -->
    <form method="GET" action="/php/submit-get.php">
        <div class="mb-3">
            <label for="givenNameGet" class="form-label">Given Name:</label>
            <input type="text" class="form-control" id="givenNameGet" name="given_name_get" required>
        </div>
        <div class="mb-3">
            <label for="middleNameGet" class="form-label">Middle Name:</label>
            <input type="text" class="form-control" id="middleNameGet" name="middle_name_get">
        </div>
        <div class="mb-3">
            <label for="lastNameGet" class="form-label">Last Name:</label>
            <input type="text" class="form-control" id="lastNameGet" name="last_name_get" required>
        </div>
        <div class="mb-3">
            <label for="dobGet" class="form-label">Date of Birth:</label>
            <input type="date" class="form-control" id="dobGet" name="dob_get" required>
        </div>
        <div class="mb-3">
            <label for="courseGet" class="form-label">Course:</label>
            <select class="form-select" id="courseGet" name="course_get" required>
            <option value="">Select Course</option>
                <!-- Core Tech & Engineering Courses -->
                <option value="Computer Science">Computer Science</option>
                <option value="Information Technology">Information Technology</option>
                <option value="Computer Engineering">Computer Engineering</option>
                <option value="Software Engineering">Software Engineering</option>
                <option value="Electrical Engineering">Electrical Engineering</option>
                <option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
                <option value="Mechanical Engineering">Mechanical Engineering</option>
                <option value="Civil Engineering">Civil Engineering</option>
                <option value="Biomedical Engineering">Biomedical Engineering</option>

                <!-- Data, AI, and Machine Learning -->
                <option value="Data Science">Data Science</option>
                <option value="Artificial Intelligence">Artificial Intelligence</option>
                <option value="Machine Learning">Machine Learning</option>
                <option value="Big Data Analytics">Big Data Analytics</option>
                <option value="Data Engineering">Data Engineering</option>
                
                <!-- Network & Security -->
                <option value="Network Engineering">Network Engineering</option>
                <option value="Cybersecurity">Cybersecurity</option>
                <option value="Information Security">Information Security</option>
                <option value="Cloud Computing">Cloud Computing</option>
                
                <!-- Development (Software, Web, Mobile) -->
                <option value="Web Development">Web Development</option>
                <option value="Mobile App Development">Mobile App Development</option>
                <option value="Game Development">Game Development</option>
                <option value="Full Stack Development">Full Stack Development</option>
                <option value="Blockchain Development">Blockchain Development</option>
                <option value="DevOps Engineering">DevOps Engineering</option>

                <!-- IT Management & Systems -->
                <option value="Information Systems">Information Systems</option>
                <option value="IT Management">IT Management</option>
                <option value="Management Information Systems">Management Information Systems</option>
                <option value="Enterprise Resource Planning (ERP)">Enterprise Resource Planning (ERP)</option>

                <!-- Specializations in Emerging Technologies -->
                <option value="Robotics">Robotics</option>
                <option value="Quantum Computing">Quantum Computing</option>
                <option value="Internet of Things (IoT)">Internet of Things (IoT)</option>
                <option value="Augmented Reality and Virtual Reality">Augmented Reality and Virtual Reality</option>

                <!-- Multimedia and Design -->
                <option value="Digital Media Design">Digital Media Design</option>
                <option value="Graphic Design">Graphic Design</option>
                <option value="Animation">Animation</option>
                <option value="User Experience (UX) Design">User Experience (UX) Design</option>

                <!-- Other Technology-related Courses -->
                <option value="Database Management">Database Management</option>
                <option value="Geographical Information Systems (GIS)">Geographical Information Systems (GIS)</option>
                <option value="Health Informatics">Health Informatics</option>
                <option value="Computational Biology">Computational Biology</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary px-5">Submit</button>
        <button type="reset" class="btn btn-secondary">Clear</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="/script.js"></script>
</body>
</html>
