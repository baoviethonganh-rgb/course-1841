<?php
include __DIR__ . '/../includes/auth.php';
requireAdmin();

$error = '';

try {

    if (isset($_POST["name"])) {

        include __DIR__ . '/../includes/DatabaseConnection.php';

        $id = $_POST["id"] ?? '';
        $name = $_POST["name"] ?? '';
        $email = $_POST["email"] ?? '';
        $role = $_POST["role"] ?? '';

        if (empty($name) || empty($email)) {
            $error = "Fields required";

            $user = [
                'id' => $id,
                'name' => $name,
                'email' => $email,
                'role' => $role
            ];

        } else {

            $stmt = $pdo->prepare("UPDATE users 
                                   SET name = :name, email = :email, role = :role
                                   WHERE id = :id");

            $stmt->execute([
                ':name' => $name,
                ':email' => $email,
                ':role' => strtolower(trim($role)),
                ':id' => $id
            ]);

            header("location: users.php");
            exit();
        }

    } else {

        include __DIR__ . '/../includes/DatabaseConnection.php';

        if (!isset($_GET["id"])) {
            echo "User ID is missing!";
            exit();
        }

        $id = $_GET["id"];

        $stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        $user = $stmt->fetch();
    }

    $title = 'Edit User';

    ob_start();
    include 'templates/edituser.html.php';
    $output = ob_get_clean();

} catch (PDOException $e) {

    $title = 'Error';
    $output = 'Error: ' . $e->getMessage();
}

include 'templates/layout.html.php';
?>