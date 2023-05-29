<?php

class Connect{
    public $connection;

    public function __construct(){
        $this->connection= new mysqli("localhost","root","","MVCDB");
       
    }

    /*
    1=>table
    2=>assosiative array
    */
    public function insert_data($table,$array){
        //insert into table()values();
        $key = implode(",",array_keys($array));
        $value = implode("','",array_values($array));
        $query="insert into $table($key)values('$value')";
        if($this->connection->query($query)){
            return "Data successfully inserted";
        }
        else{
            return "Data successfully not inserted";
        }

    }
}




?>