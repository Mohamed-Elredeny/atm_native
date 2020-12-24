<?php
require_once '../extendable/header2.php';
require_once '../../../Interfaces/employee/home.php';
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
                <a class="nav-link" href="#">Sign in</a>
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
<?php if(count($tracks) > 0){ ?>
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
    <?php foreach ($tracks as $t){ ?>
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td></td>
    </tr>

    <?php } ?>
    </tbody>
</table>
<?php } ?>