<?php
require_once '../extendable/header2.php';

$con = mysqli_connect('localhost','root','','atms_native');
$sqlDeps = "select * from departments";
$sqlUsers = "select * from users where type='admin'";

$queryDeps = mysqli_query($con,$sqlDeps);
$queryAdmins = mysqli_query($con,$sqlUsers);

$allDeps = mysqli_fetch_all($queryDeps,MYSQLI_ASSOC);
$allAdmins = mysqli_fetch_all($queryAdmins,MYSQLI_ASSOC);

if(!$allDeps){
    $allDeps= [];
}
if(!$allAdmins){
    $allAdmins= [];
}
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
<center>
    <form action="../../../Interfaces/admin/departments.php" method="post">
        <table class="table table-hover" style="text-align: center">
        <thead>

        <tr>
            <th scope="col">Department Id</th>
            <th scope="col">Department Name</th>
            <th scope="col">Department Head</th>
            <th>Edit</th>
            <th>Delete</th>

        </tr>

        </thead>
        <tbody>
        <?php foreach ($allDeps as $all){ ?>
        <tr>
            <th scope="row"><?php echo $all['id']?></th>
            <td><?php echo $all['name']?></td>
            <td><?php
                if($all['head'] == ''){
                    echo "un specified";
                } else{
                    echo $all['head'];
                }
                ?></td>
            <td>
                <input type="button"  value="edit">
            </td>
            <td>
                <input type="button"  value="Delete">
            </td>
        </tr>
        <?php } ?>
        <tr>
          <td colspan="3">
              <input type="text" name="name" placeholder="Department Name">
          </td>

            <td colspan="2">
                <select  class="btn " name="head"  style="width: 160px;height: 50px">
                    <?php foreach ($allAdmins as $all){ ?>
                    <option value="<?php echo $all['id']?>"><?php echo $all['name']?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="5">
                <input type="submit" value="Add New Department" name="add">
            </td>
        </tr>

        </tbody>
    </table>
    </form>
</center>

