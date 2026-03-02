<?php
session_start();

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
        <h2>Student Records</h2>
        
        <a class="btn" href="/labexam/student_add.php">Add student +</a>
    </form>

    <form>
        <table border="1" cellpadding="8">
        <tr>
            <th>ID</th><th>Name</th><th>Email</th><th>course</th><th>Action</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['ID_number']; ?></td>
            <td><?php echo $row['full_name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['course']; ?></td>
            <td>
            <a class="btn" href="student_add.php?id=<?php echo $row['ID_number']; ?>">Edit</a>
            </td>
        </tr>
        <?php } ?>
        </table>

    </from>
    
</body>
</html>