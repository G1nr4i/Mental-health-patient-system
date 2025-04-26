<?php
include 'db.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];

    $conn->query("INSERT INTO tbl_patient (name, address) VALUES ('$name', '$address')");

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Patient</title>
</head>
<body>
    <h1>Add Patient</h1>
    <form method="post">
        Name: <input type="text" name="name" required><br><br>
        Address: <textarea name="address" required></textarea><br><br>
        <button type="submit" name="submit">Save</button>
    </form>
</body>
</html>
