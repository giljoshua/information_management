<?php
require 'includes/auth.php';
checkAuth();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Welcome to Wellmeadows Dashboard</h1>
    <ul>
        <li><a href="staff/">Manage Staff</a></li>
        <li><a href="patients/">Manage Patients</a></li>
        <li><a href="wards/">Manage Wards</a></li>
        <li><a href="medications/">Manage Medications</a></li>
        <li><a href="requisitions/">Manage Requisitions</a></li>
    </ul>
    <a href="logout.php">Logout</a>
</body>
</html>
