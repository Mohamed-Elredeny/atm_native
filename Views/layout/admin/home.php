<?php
require_once '../extendable/header2.php';
require_once '../../../Interfaces/admin/home.php';
?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="addAttendance.php">Add the Daily Attendance</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="departments.php">Departments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Users</a>
                </li>
            </ul>
        </div>
    </nav>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Number</th>
            <th scope="col">Day</th>
            <th scope="col">Sign_in</th>
            <th scope="col">Sign_out</th>
            <th scope="col">Work_hours</th>

        </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td></td>
            </tr>

        </tbody>
    </table>
