<?php
session_start();

function requireLogin() {
    if (!isset($_SESSION['loggedin'])) {
        header('Location: ../auth/login.php');
        exit();
    }
}

function requireAdmin() {
    if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
        header("Location: ../auth/login.php");
        exit();
    }
}

function requireUser() {
    requireLogin();
    if ($_SESSION['role'] !== 'user') {
        header('Location: ../auth/login.php');
        exit();
    }
}