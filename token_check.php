<?php
    session_start();
    if (isset($_POST["token"]) && $_POST["token"] === $_SESSION["token"]) {
        $tokenStatus = "Success";
    } else {
        $tokenStatus = "Error";
    }
?>