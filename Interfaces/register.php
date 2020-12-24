<?php
$id='';
require_once '../Controllers/UsersController.php';
if(isset($_POST['register'])) {
    $users = new UsersController();

    $name =htmlspecialchars($_POST['email']);
    $phone =htmlspecialchars($_POST['phone']);
    $email =htmlspecialchars($_POST['email']);
    $password =htmlspecialchars(password_hash($_POST['password'], PASSWORD_DEFAULT));
    $dep_id =htmlspecialchars($_POST['dep_id']);

    @$userData = $users->insert('emp',$name,$phone,$email,$password,$dep_id,$id);
    if($userData){
        header('location:../Views/layout/login.php');
    }else{
        echo "error";
    }

}