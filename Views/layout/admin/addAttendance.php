<?php
require_once '../extendable/header2.php';
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Add the Daily Attendance</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sign out</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Requests</a>
            </li>
        </ul>
    </div>
</nav>
<center>
    <h2>Add New Attendance Day</h2>

    <form action="../../../Interfaces/admin/addAttendance.php" method="post">
        <input type="submit" value="add" name="addAttendance">
    </form>
</center>
