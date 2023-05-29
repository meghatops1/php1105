<?php

class Demo {
    public static $count;
    public function __construct(){
        Demo::$count++;
    }
    public static function countPrint(){
        echo "count of object=".Demo::$count;
    }
}
Demo::$count=0;
$d1=new Demo();
$d2=new Demo();
$d3=new Demo();
$d4=new Demo();
Demo::countPrint();
?>