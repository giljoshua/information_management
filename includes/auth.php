<?php
session_start();

function checkAuth() {
    if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
        header("Location: ../login.php");
        exit;
    }
}
