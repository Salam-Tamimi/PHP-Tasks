<?php
include('db.php');
$sql = "DELETE FROM crud_example WHERE id = '" . $_GET['id'] . "' ";

if (mysqli_query($conn, $sql)) { 
    header("Location: read.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}
?>