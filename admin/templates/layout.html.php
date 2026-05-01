<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="review.css">
    <title><?= $title ?></title>
</head>

<body>

<header>
    <h1>Internet Review Film Database</h1>
</header>

<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="films.php">Films List</a></li>
        <li><a href="users.php">Users List</a></li>
        <li><a href="reviews.php">Reviews List</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="../auth/logout.php">Logout</a></li>
    </ul>
</nav>

<main>
    <?= $output ?>
</main>

<hr>

<footer>
    &copy; IJDB 2023
</footer>

</body>
</html>