<?php
if(isset($_GET['request'])){
    $request = $_GET['request'];
    if($request == 'login'){
        header('location:Views/layout/login.php');
    }
}