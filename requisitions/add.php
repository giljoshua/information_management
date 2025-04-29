<?php
require '../includes/auth.php';
require '../includes/config.php';
checkAuth();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    if ($name) {
        $stmt = $pdo->prepare("INSERT INTO requisitions (name) VALUES (?)");
        $stmt->execute([$name]);
        header("Location: index.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Requisition</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h2>Add New Requisition</h2>
    <form method="post">
        <input type="text" name="name" placeholder="Name" required>
        <button type="submit">Add</button>
    </form>
</body>
</html>
