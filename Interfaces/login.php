<?php
require_once '../Controllers/UsersController.php';
if(isset($_POST['login'])) {
    $users = new UsersController();
    //echo $users->login('123','123');
    $password = $_POST['passwprd'];
    $email = $_POST['email'];
    @$userData = $users->login($email, $password);
    if ($userData[0]['id'] === $_SESSION['id']) {
        header('location:../Views/layout/employee/home.php');
    } else {
        header('location:../empty.php?request=login');
    }
}


