<?php
require_once 'UsersController.php';
class TracksController  {

    private $host="localhost";
    private $username="root";
    private $password="";
    private $database="atms_native";
    private $con=null;
    private $type = 'emp';
    private $trackers ='';

    function __construct() {
        $con = mysqli_connect($this->host,$this->username,$this->password,$this->database);
        $this->con = $con;
        $emps = new UsersController();
        $this->trackers = $emps->selectWithType($this->type);
    }


    /*Through this function, the admin
can add each day attendance
for all the employee using
 a specific button */
    function AddNewDay(){
        $added =0;
        foreach ($this->trackers as $t ){
           $this->InsertNewTrack($t['id'],0,0,0);
            $added++;
        }
        return $added;
    }
    function InsertNewTrack($user_id,$sign_in,$sign_out,$work_hours){
        $current_date =date("Y/m/d");
        //$insert = "insert into attendance (user_id,current_date	,sign_in,sign_out,work_hours) values ('.$user_id.','.$current_date.','.$sign_in.','.$sign_out.','.$work_hours.')";
        $insert ="INSERT INTO `attendance`(`user_id`, `curent_data`, `sign_in`, `sign_out`, `work_hours`) VALUES ('$user_id','$current_date','$sign_in','$sign_out','$work_hours')";
        $query = mysqli_query($this->con,$insert);
        if($query){
            return 1;
        }else{
            return 0;
        }
    }
    function SingInOrOut($sign,$user_id,$date){
        if($sign == 'signin'){
            return 1;
        }elseif ($sign == 'signout'){
            return 1;
        }elseif ($sign == 'aplogize'){
            return 1;
        }else{
            return 0;
        }

    }
    function  viewTrackByUserId($user_id){
        $sql = "select * from attendance where user_id='$user_id' ";
        $query =mysqli_query($this->con,$sql);
        $records =mysqli_fetch_all($query,MYSQLI_ASSOC);
        if(count(@$records) > 0){
            return $records;
        }else{
            return 0;
        }

    }



    function sign($sign,$hours,$user_id,$data){
        if($sign == 'signin'){
            $sign_in=1;
            $sql = "UPDATE `attendance` SET `sign_in`='.$sign_in.' WHERE (`user_id`='.$user_id.' and `curent_data`='.$data.')";
            $query = mysqli_query($this->con,$sql);
            if($query){
                return 1;
            }else{
                return 0;
            }
        }elseif ($sign == 'signout'){
            $sign_in=1;
            $sql = "UPDATE attendance SET sign_out='.$sign_in.' WHERE  'curent_data'=$data";
            $query = mysqli_query($this->con,$sql);
            if($query){
                return 1;
            }else{
                return 0;
            }
        }else{
            return 2;
        }
    }
}
