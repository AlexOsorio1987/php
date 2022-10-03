<?php
class Database
{
    public $host = 'localhost'; 
    public $user = 'root'; 
    public $pass = ''; 
    public $db = 'invaluablephp'; 
    private $conexion;

    
  
 function connectToDatabase(){
    $conexion= mysqli_connect($this->host, $this->user, $this->pass, $this->db);

    if(mysqli_connect_error()){ 
        echo "Tenemos un error de conexion" . mysqli_connect_error();
    }
    return $conexion; 
}

}



?>