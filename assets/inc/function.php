<?php
    require_once "../../../Premium_template_Db_config/pdo_config.php";

    function login($id, $password) {
        global $pdo;

        echo '<pre>';
        var_dump('$_POST["id"] = '. $_POST["id"]);
        echo '</pre>';

        echo '<pre>';
        var_dump('$_POST["password"] = ' . $_POST["password"]);
        echo '</pre>';
        

        echo '<pre>';
        var_dump("ici1");
        echo '</pre>';

        try {
            $query = $pdo->prepare("SELECT * FROM admin WHERE id=?"); 
            $query->setFetchMode(PDO::FETCH_ASSOC);
            echo '<pre>';
            var_dump("[id]= " , [$id]);
            echo '</pre>';
            $query->execute([$id]);
            $admin = $query->fetch();

            echo '<pre>';
            var_dump("admin= " , $admin);
            echo '</pre>';

            echo '<pre>';
            var_dump($admin["password"] , $admin["id"]);
            echo '</pre>';

            echo '<pre>';
            var_dump("ici2 = on et dans la fucntion");
            echo '</pre>';

            echo '<pre>';
            var_dump("admin = " , [$admin]);
            echo '</pre>';

            if (empty($admin)) {
                echo '</pre>';
                var_dump ("bah oue c'est vide");
                echo '</pre>';
            }
            
            if(empty($admin) || $admin === false) {
                $_SESSION["errorMessage"] = "Login failed.";

                echo '</pre>';
                var_dump($_SESSION["connected"]);
                echo '</pre>';

                echo '</pre>';
                var_dump($_SESSION);
                echo '</pre>';

            } elseif (!password_verify($password, $admin["password"])) {
                $_SESSION["errorMessage"] = "Wrong password.";
            } else {
                $_SESSION["validationMessage"] = "You are successfully connected.";
                $_SESSION["connected"] = true;

                echo '</pre>';
                var_dump($_SESSION["connected"]);
                echo '</pre>';

                echo '</pre>';
                var_dump($_SESSION);
                echo '</pre>';

                echo '<pre>';
                var_dump("ici3 = connected");
                echo '</pre>';

                // header("location:../../adminPage.php");
                exit;
            }
        } catch (PDOException $e) {
            session_destroy();
            error_log("Database error: " . $e->getMessage());

            echo '<pre>';
            var_dump("ici2 = pdoE");
            echo '</pre>';

        } finally {
            // header("location:../../adminConnectionPage.php");

            echo '<pre>';
            var_dump("ici3 = finally");
            echo '</pre>';
            // exit;
        }
    }

    function testInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
