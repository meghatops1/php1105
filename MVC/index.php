<?php
 include('Controller/MyController.php');

 $obj= new MyController();
 $_SERVER['SCRIPT_FILENAME'];
 
 if(isset($_SERVER['PATH_INFO'])){
     $path=$_SERVER['PATH_INFO'];
     switch($path){
        case "/create":
            $obj->create();
        break; 
        case "/home":
            $obj->home();
        break;
        default:
            $obj->home();
        break;           
     }
 }


?>