<?php
include "../db.php";

$message = "";

if (isset($_POST['Add_student'])) {
    $ID_number = $_POST['ID_number'];
    $Full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    if ($ull_name == "" || $email == "") {
        $message = "Name and Email are required!";
    } else {    
    $sql = "INSERT INTO students (ID_number, full_name, email, course)
            VALUES ('$ID_number'$Full_name', '$email', '$course')";
    mysqli_query($conn, $sql);
    header("Location: student_add.php");
    exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST">
        <h2>Create Student Records</h2>

        <label>ID number</label><br>
        <input type="text" name="username" required><br><br>

        <label>Name</label><br>
        <input type="text" name="username" required><br><br>

        <label>Email</label><br>
        <input type="text" name="username" required><br><br>

        <label>Course</label><br> 
        <input type="text" name="username" required><br><br>

        <button class="action_link" type="submit" name="Add_student">Add student</button>
    </form>
    
</body>
</html>