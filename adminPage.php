<?php

session_start();
if ($_SESSION['connected'] != true) {
    header('location:adminConnexionPage.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
</head>
<body>
    <h1>admin page</h1>
</body>
</html>