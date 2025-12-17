<?php
include 'db_connect.php';
if (!$conn) die("Błąd połączenia");

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM uczniowie WHERE id=$id");

header("Location: index.php");
mysqli_close($conn);