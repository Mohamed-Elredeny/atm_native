<?php
require_once 'AutoId.php';
$id = create_guid();
class UsersController{
    private $host="localhost";
    private $username="root";
    private $password="";
    private $database="atms_native";
    private $con=null;

    function __construct() {
        $con = mysqli_connect($this->host,$this->username,$this->password,$this->database);
        $this->con = $con;
    }
    public function insert($type,$name,$phone,$email,$password,$dep_id,$id){
        if($type === 'emp'){
            $insert = "insert into users (id,name,phone,email,password,type,dep_id) values ('.$id.','.$name.','.$phone.','.$email.','.$password.','.$type.','.$dep_id.')";

        }elseif ($type === 'admin'){
            $insert = "insert into users (id,name,phone,email,password,type,dep_id) values ('.$id.','.$name.','.$phone.','.$email.','.$password.','.$type.','.$dep_id.')";
        }else{
            $insert = null;
        }
        $query = mysqli_query($this->con,$insert);
        if($query){
            return 1;
        }else{
            return 0;
        }


    }
    public function selectAll($type){
        $selectAll = "select * from users where type = '.$type.' ";
        $query =mysqli_query($this->con,$selectAll);
        if($query){
            $records = mysqli_fetch_all($query,MYSQLI_ASSOC);
            return $records;
        }else{
            echo "Statement Error";
            $records = null;
            return $records;
        }

    }
    public function selectWithId($id){
        $selectWithId = "select * from users where id ='.$id.' ";
        $query =mysqli_query($this->con,$selectWithId);
        if($query){

            $records = mysqli_fetch_all($query,MYSQLI_ASSOC);
            return $records;
        }else{
            echo "Statement Error";
            $records = null;
            return $records;
        }
    }
    public function selectWithType($type){
        $selectWithId = "select * from users where type ='.$type.' ";
        $query =mysqli_query($this->con,$selectWithId);
        if($query){
            $records = mysqli_fetch_all($query,MYSQLI_ASSOC);
            return $records;
        }else{
            echo "Statement Error";
            $records = null;
            return $records;
        }
    }
    public function deleteAll(){
        $deleteSql = "delete from videos";
        $query =mysqli_query($this->con,$deleteSql);
        if($query){
            echo "Done";
        }else{
            echo "Statement Error";
        }
    }
    public function deleteWithId($id){
        $deleteSql = "delete from videos where id =$id";
        $query =mysqli_query($this->con,$deleteSql);
        if($query){
            echo "Done";
        }else{
            echo "Statement Error";
        }
    }
    public function updateWithId($id,$url,$section_id){
        $updateQuery = "update videos set url='$url', section_id='$section_id' where id ='$id' ";
        $query =mysqli_query($this->con,$updateQuery);
        if($query){
            echo "Done";
        }else{
            echo "Statement Error";
        }

    }
    public function login($email,$password){
        $sql = "select * from users where email='$email' and password='$password'";
        $query = mysqli_query($this->con,$sql);
        $records = mysqli_fetch_all($query,MYSQLI_ASSOC);
        if(count(@$records) > 0){
            $_SESSION['id']=$records[0]['id'];
            return $records[0]['id'];
        }else{
            return 0;
        }

    }
}

/*$name ="moka";
$email ="moka";
$password ="moka";
$password = password_hash("rasmuslerdorf", PASSWORD_DEFAULT);
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$type ="emp";
$dep_id = 1;
$phone =123;*/

/*
$name =htmlspecialchars(stripslashes(trim($_POST['name'])));
$email =htmlspecialchars(stripslashes(trim($_POST['email'])));
$password =htmlspecialchars(stripslashes(trim($_POST['password'])));
$type =htmlspecialchars(stripslashes(trim($_POST['type'])));
$dep_id =htmlspecialchars(stripslashes(trim($_POST['dep_id'])));
$phone =htmlspecialchars(stripslashes(trim($_POST['phone'])));
*/
//Hash password using rasmuslerdorf
//Insert data
//echo $users->insert($type,$name,$phone,$email,$password,$dep_id,$id);
//Select Data with type
//var_dump( $users->selectAll($type));
//Select Data with id
//var_dump( $users->selectWithId($id));
//echo $users->login('moka',123);