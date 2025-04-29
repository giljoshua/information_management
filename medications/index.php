<?php
require '../includes/auth.php';
require '../includes/config.php';
checkAuth();

$stmt = $pdo->query("SELECT * FROM medications");
$list = $stmt->fetchAll();
?>

<h2>Medications List</h2>
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
