<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        session_start();
        if (isset($_COOKIE["active"]) && $_COOKIE["active"] === session_id()) {
            echo $_SESSION["token"];
        }
    }
?>