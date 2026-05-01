<?php
include __DIR__ . '/../includes/auth.php';
requireAdmin();

if (isset($_POST['name'])) {

    try {
        include __DIR__ . '/../includes/DatabaseConnection.php';

        $name = $_POST["name"] ?? '';
        $email = $_POST["email"] ?? '';
        $password = $_POST["password"] ?? '';
        $role = $_POST["role"] ?? '';

        if (empty($name) || empty($email) || empty($password)) {
            $error = "All fields required";
        } else {

            $stmt = $pdo->prepare("INSERT INTO users (name, email, password, role)
                                   VALUES (:name, :email, MD5(:password), :role)");

            $stmt->execute([
                ':name' => $name,
                ':email' => $email,
                ':password' => $password,
                ':role' => strtolower(trim($role))
            ]);

            header("location: users.php");
            exit();
        }

    } catch (PDOException $e) {

        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }

} else {

    include __DIR__ . '/../includes/DatabaseConnection.php';

    $title = 'Add User';

    ob_start();
    include 'templates/adduser.html.php';
    $output = ob_get_clean();
}

include 'templates/layout.html.php';
?>