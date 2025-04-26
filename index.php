<?php
include 'db.php';

$result = $conn->query("SELECT * FROM tbl_patient");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Patient Management System</title>
</head>
<body>
    <h1>Patient List</h1>
    <a href="add.php">Add New Patient</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Actions</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['patient_id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['patient_id']; ?>">Edit</a> |
                <a href="delete.php?id=<?php echo $row['patient_id']; ?>">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
