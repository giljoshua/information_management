<?php
require '../includes/auth.php';
require '../includes/config.php';
checkAuth();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    if ($name) {
        $stmt = $pdo->prepare("INSERT INTO wards (name) VALUES (?)");
        $stmt->execute([$name]);
        header("Location: index.php");
    }
}
?>

<h2>Add New Ward</h2>
<form method="post">
    <input type="text" name="name" placeholder="Name" required>
    <button type="submit">Add</button>
</form>
