<?php
    require_once "function.php";

    $id = $password = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST) && !empty($_POST)) {
        $id = testInput($_POST["id"]);
        $password = testInput($_POST["password"]);

        if (empty(["id"])) {
            exit;
        } elseif (!preg_match("/^[a-zA-Z-']*$/", $id)) {
            exit;
        };
        
        if (empty(["password"])) {
            exit;
        } elseif (!preg_match("/^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z]).{8,}$/", $password)) {
            exit;
        };

        login($id, $password);
    }
?>