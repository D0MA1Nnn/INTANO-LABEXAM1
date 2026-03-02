<?php
include 'db.php';

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $name = $_POST['full_name'];
    $email = $_POST['email'];
    $student_number = $_POST['student_number'];
    $course = $_POST['course'];

    mysqli_query($conn, "UPDATE students SET
        full_name='$name',
        email='$email',
        student_number='$student_number',
        course='$course'
        WHERE id=$id");

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-box">
    <h2>Edit Student</h2>

    <form method="POST">
        <input type="text" name="full_name" value="<?php echo $row['full_name']; ?>" required>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required>
        <input type="text" name="student_number" value="<?php echo $row['student_number']; ?>" required>
        <input type="text" name="course" value="<?php echo $row['course']; ?>" required>
        <button class="btn" name="update">Update</button>
    </form>
</div>

</body>
</html>