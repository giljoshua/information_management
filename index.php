<?php
require 'includes/auth.php';
checkAuth();
?>

<h1>Welcome to Wellmeadows Dashboard</h1>
<ul>
    <li><a href="staff/">Manage Staff</a></li>
    <li><a href="patients/">Manage Patients</a></li>
    <li><a href="wards/">Manage Wards</a></li>
    <li><a href="medications/">Manage Medications</a></li>
    <li><a href="requisitions/">Manage Requisitions</a></li>
</ul>
<a href="logout.php">Logout</a>
