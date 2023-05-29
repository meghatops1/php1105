<?php 
include('Model/Connect.php');
 class MyController extends Connect{
    public $baseurl;
    public function __construct(){
        $this->baseurl="http://localhost/PHP_1105/MVC/index.php";
        parent :: __construct();
        
    }
    public function create(){
        include('View/add.php');
        if(isset($_REQUEST['submit'])){
            if(isset($_FILES['img']['name'])){
                $filename=$_FILES['img']['name'];
                $size=$_FILES['img']['size'];
                $temp=$_FILES['img']['tmp_name'];
                $type=$_FILES['img']['type'];
                move_uploaded_file($temp,"Images/".$filename);
            }
            $insert_array=[
                "uname"=>$_REQUEST['uname'],
                "email"=>$_REQUEST['email'],
                "pass"=>$_REQUEST['pwd'],
                "image"=>$filename,
            ];
            echo $this->insert_data("Users",$insert_array);
            
        }
    }

    public function home(){
        include('View/home.php');
    }
 }

?>
