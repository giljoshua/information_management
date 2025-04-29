<?php
require '../includes/auth.php';
require '../includes/config.php';
checkAuth();

$id = $_GET['id'] ?? null;
if (!$id) die("No ID provided.");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("DELETE FROM patients WHERE id = ?");
    $stmt->execute([$id]);
    header("Location: index.php");
}

$stmt = $pdo->prepare("SELECT * FROM patients WHERE id = ?");
$stmt->execute([$id]);
$item = $stmt->fetch();

if (!$item) die("Patient not found.");
?>

<h2>Delete Patient</h2>
<p>Are you sure you want to delete <strong><?= htmlspecialchars($item['name']) ?></strong>?</p>
<form method="post">
    <button type="submit">Yes, Delete</button>
    <a href="index.php">Cancel</a>
</form>
