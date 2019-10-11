<?php
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        if ($_POST["username"] === "admin" && $_POST["password"] === "admin") {
            session_start();
            if (setcookie("active", session_id())) {
                $_SESSION["token"] = bin2hex(openssl_random_pseudo_bytes(16));
            }
            header("Location: user.php");
        }
    }
?>