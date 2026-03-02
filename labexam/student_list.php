<?php
include "../db.php";
$result = mysqli_query($conn, "SELECT * FROM students ORDER BY ID_number DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Clients</h2>
<p><a class="btn" href="clients_add.php">+ Add Client</a></p>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Action</th>
    </tr>
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $row['client_id']; ?></td>
        <td><?php echo $row['full_name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td>
        <a class="btn" href="clients_edit.php?id=<?php echo $row['client_id']; ?>">Edit</a>
        </td>
    </tr>
    <?php } ?>
</table>

    
</body>
</html>