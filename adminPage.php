<?php
    session_start();

    var_dump($_SESSION["connected"]);
    var_dump($_SESSION);
    
    if (!isset($_SESSION["connected"]) || $_SESSION["connected"] !== true) {
        header("location:adminConnectionPage.php");
        exit;
    }

    echo '<pre>';
    var_dump("c'est bon ca marche");
    echo '</pre>';
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