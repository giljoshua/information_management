<?php
require '../includes/auth.php';
require '../includes/config.php';
checkAuth();

$id = $_GET['id'] ?? null;
if (!$id) die("No ID provided.");

$stmt = $pdo->prepare("SELECT * FROM patients WHERE id = ?");
$stmt->execute([$id]);
$item = $stmt->fetch();

if (!$item) die("Patient not found.");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    if ($name) {
        $updateStmt = $pdo->prepare("UPDATE patients SET name = ? WHERE id = ?");
        $updateStmt->execute([$name, $id]);
        header("Location: index.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Patient</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h2>Edit Patient</h2>
    <form method="post">
        <input type="text" name="name" value="<?= htmlspecialchars($item['name']) ?>" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>
