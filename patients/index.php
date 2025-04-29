<?php
require '../includes/auth.php';
require '../includes/config.php';
checkAuth();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patients</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php
    $stmt = $pdo->query("SELECT * FROM patients");
    $list = $stmt->fetchAll();
    ?>

    <h2>Patients List</h2>
    <a href="add.php">Add New</a>
    <ul>
        <?php foreach ($list as $item): ?>
            <li>
                <?= htmlspecialchars($item['name']) ?>
                - <a href="edit.php?id=<?= $item['id'] ?>">Edit</a>
                - <a href="delete.php?id=<?= $item['id'] ?>">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
