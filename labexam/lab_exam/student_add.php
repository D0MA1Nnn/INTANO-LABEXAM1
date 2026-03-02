<?php
include 'db.php';

if (isset($_POST['save'])) {
    $name = $_POST['full_name'];
    $email = $_POST['email'];
    $student_number = $_POST['student_number'];
    $course = $_POST['course'];

    mysqli_query($conn, "INSERT INTO students (full_name, email, student_number, course)
    VALUES ('$name', '$email', '$student_number', '$course')");

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-box">
    <h1>Create Student Record</h1>

    <form method="POST">
        <input type="text" name="student_number" placeholder="Student Number" required>
        <input type="text" name="full_name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="course" placeholder="Course" required>
        
        <button class="btn" name="save">Add Student</button>

        <button class="btn" name="cancel" onclick="window.location.href='index.php'">Cancel</button>
    </form>
</div>

</body>
</html>