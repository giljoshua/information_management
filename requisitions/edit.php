<?php
require '../includes/auth.php';
require '../includes/config.php';
checkAuth();

$id = $_GET['id'] ?? null;
if (!$id) die("No ID provided.");

$stmt = $pdo->prepare("SELECT * FROM requisitions WHERE id = ?");
$stmt->execute([$id]);
$item = $stmt->fetch();

if (!$item) die("Requisition not found.");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    if ($name) {
        $updateStmt = $pdo->prepare("UPDATE requisitions SET name = ? WHERE id = ?");
        $updateStmt->execute([$name, $id]);
        header("Location: index.php");
    }
}
?>

<h2>Edit Requisition</h2>
<form method="post">
    <input type="text" name="name" value="<?= htmlspecialchars($item['name']) ?>" required>
    <button type="submit">Update</button>
</form>
