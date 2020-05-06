<?php

 class DB{
    public $con;
    
    public function connect(){
        //                             sql server name           databae name
        define('SERVER',"sqlsrv:Server=DESKTOP-AI1N279\SQLEXPRESS;Database=HRMS");
        define('USERNAME','sa');//username
        define('PASSWORD','1234');//password
        
        try{
            $this->con = new PDO(SERVER, USERNAME, PASSWORD);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            if($this->con){
                return $this->con;//return database connection
            }
        }
        catch(PDOException $ex){
            die("connection failed");
        }
    }
 
 }

//  $db = new DB();
// $db->connect();    //database object
?>