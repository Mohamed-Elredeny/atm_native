<?php
require_once 'extendable/header.php';
?>


<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
            <img src="../../Assets/image/72682801_109045173848330_6121582849372979200_o.jpg" id="icon" alt="User Icon" />
        </div>

        <!-- Login Form -->
        <form action="../../Interfaces/login.php" method="post">
            <input type="text" id="login" class="fadeIn second" name="email" placeholder="email">
            <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
            <input type="submit" class="fadeIn fourth" value="Log In" name="login">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
            <a class="underlineHover" href="#">Create new Account?</a>
        </div>

    </div>
</div>