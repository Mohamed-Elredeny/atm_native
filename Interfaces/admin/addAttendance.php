<?php
session_start();
require_once '../../Controllers/TracksController.php';
require_once '../../Controllers/UsersController.php';


if(isset($_POST['addAttendance'])) {
    $users = new UsersController();
    $tracks = new TracksController();
    $i=0;
//Select all users
    $all_users = $users->selectWithType('emp');
    if ($all_users != 0) {
        foreach ($all_users as $u) {
            $tracks->InsertNewTrack($u['id'], 0, 0, 0);
            $i++;
        }
    }
    if($i > 0){
        header('location:../../Views/layout/admin/addAttendance.php');
    }
}