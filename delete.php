<?php
include 'db.php';

$id = $_GET['id'];

$conn->query("DELETE FROM tbl_patient WHERE patient_id = $id");

header("Location: index.php");
?>
