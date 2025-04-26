<?php
include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM tbl_patient WHERE patient_id = $id");
$row = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];

    $conn->query("UPDATE tbl_patient SET name='$name', address='$address' WHERE patient_id = $id");

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Patient</title>
</head>
<body>
    <h1>Edit Patient</h1>
    <form method="post">
        Name: <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br><br>
        Address: <textarea name="address" required><?php echo $row['address']; ?></textarea><br><br>
        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>
