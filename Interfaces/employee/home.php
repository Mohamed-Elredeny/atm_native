<?php
session_start();
require_once '../../../Controllers/TracksController.php';
require_once '../../../Controllers/UsersController.php';

//echo $_SESSION['id'];
$user_track = new TracksController();
$tracks =$user_track->viewTrackByUserId($_SESSION['id']);
if(!$tracks){
    echo "<center><h2>You dont have any work days yet it your first day!</h2></center>";
    $tracks=[];
}