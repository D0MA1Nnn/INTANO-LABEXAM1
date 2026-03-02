<?php
include 'db.php';

if (!isset($_SESSION['username'])) {
    header("Location: student_login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Records</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Student Records</h1>

    <a href="student_add.php" class="add-btn">Add Student +</a>

    <?php
    $students = mysqli_query($conn, "SELECT * FROM students ORDER BY id DESC");
    while($row = mysqli_fetch_assoc($students)) {
    ?>
        <div class="card">
            <div class="card-header">
                <h3><?php echo $row['full_name']; ?></h3>

                <div class="dropdown">
                    ⋮
                    <div class="dropdown-content">
                        <a href="student_edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                        <a href="student_delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                    </div>
                </div>
            </div>

            <p><?php echo $row['email']; ?></p>
            <p><?php echo $row['student_number']; ?></p>
            <p><?php echo $row['course']; ?></p>
        </div>
    <?php } ?>

    <br>
    <a class="btn" href="student_logout.php">Logout</a>
</div>

</body>
</html>