<?php
require_once 'AutoId.php';
$id = create_guid();
class DepartmentsController{
    private $host="localhost";
    private $username="root";
    private $password="";
    private $database="atms_native";
    private $con=null;

    function __construct() {
        $con = mysqli_connect($this->host,$this->username,$this->password,$this->database);
        $this->con = $con;
    }
    public function insert($name,$head){
        $insert = "insert into departments(name,head) values ('.$name.','.$head.')";
        $query = mysqli_query($this->con,$insert);
        if($query){
            return 1;
        }else{
            return 0;
        }


    }
    public function selectAll(){
        $selectAll = "select * from departments ";
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
        $selectWithId = "select * from departments where id ='.$id.' ";
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
        $deleteSql = "delete from departments";
        $query =mysqli_query($this->con,$deleteSql);
        if($query){
            echo "Done";
        }else{
            echo "Statement Error";
        }
    }
    public function deleteWithId($id){
        $deleteSql = "delete from departments where id =$id";
        $query =mysqli_query($this->con,$deleteSql);
        if($query){
            echo "Done";
        }else{
            echo "Statement Error";
        }
    }
    public function updateWithId($id,$name,$head){
        $updateQuery = "update departments set name='$name', head='$head' where id ='$id' ";
        $query =mysqli_query($this->con,$updateQuery);
        if($query){
            echo "Done";
        }else{
            echo "Statement Error";
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