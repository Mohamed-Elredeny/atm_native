<?php
session_start();
require_once '../../Controllers/DepartmentsController.php';

$departments = new DepartmentsController();
$allDeps = $departments->selectAll();
if(count(@$allDeps) == 0){

    $allDeps = [];
}
if(isset($_POST['add'])){
    $res = $departments->insert($_POST['name'],intval($_POST['head']));
/*    header('location:../../Views/layout/admin/departments.php');*/
    var_dump($res);
}