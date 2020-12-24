<?php
require_once 'extendable/header.php';
$con = mysqli_connect('localhost','root','','atms_native');
$sql = "select * from departments";
$query = mysqli_query($con,$sql);
$records = mysqli_fetch_all($query,MYSQLI_ASSOC);
if(!$records){
    $records= [];
}

?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <br><br>
        <h2 class="fadeIn first">Create new account</h2>

        <!-- Login Form -->
        <form action="../../Interfaces/register.php" method="post">
            <input type="text"  name="name" placeholder="name">
            <input type="text"  name="phone" placeholder="phone">
            <input type="text" name="email" placeholder="email">
            <input type="text" name="password" placeholder="password">
        <center>
            <br>
            <select name="dep_id" style="width: 380px;height: 50px;text-align: center">
                <?php foreach ($records as $r){ ?>
                    <option data-tokens="ketchup mustard" value="<?php echo $r['id']?>"><?php echo $r['name']?></option>
                <?php } ?>
            </select>
            <br><br>
        </center>




            <input type="submit" class="fadeIn fourth" value="Register" name="register">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter" class="fadeIn third">
            <a class="underlineHover" href="#">Create new Account?</a>
        </div>

    </div>
</div>