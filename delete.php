<?php

include("database.php");

$id = isset($_GET['deleteid']) ? $_GET['deleteid'] : null;
$table = isset($_GET['table']) ? $_GET['table'] : null;

$sql = "DELETE  FROM `$table` WHERE id = $id";
mysqli_query($conn, $sql);
header("Location: admin.php");

mysqli_close($conn);

?>