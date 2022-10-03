<?php
include_once('../config/config.php');
include('../config/Database.php');

class cliente{
    public $conexion;

    function __construct()
    {
        $db = new Database();
        $this->conexion= $db->connectToDatabase();
    }

    function save($params){
        $nombres = $params['nombres'];
        $apellidos = $params['apellidos'];
        $email = $params['email'];
        $celular = $params['celular'];
        $direccion = $params['direccion'];
        $detalle = $params['detalle'];
        
    
        $insert = "INSERT INTO clientes VALUES (NULL, '$nombres', ' $apellidos', '$email', $celular, '$direccion', '$detalle')";
        return $insert;
    }
    function getAll(){
        $sql = "SELECT * FROM clientes";
        return mysqli_query($this->conexion, $sql); 
    }

    function getOne($id){
        $sql = "SELECT * FROM clientes WHERE id =$id";
        return mysqli_query($this->conn, $sql);
    }

    function update($params){
        $nombres = $params['nombres'];
        $apellidos = $params['apellidos'];
        $email = $params['email'];
        $celular = $params['celular'];
        $direccion = $params['direccion'];
        $detalle = $params['detalle'];
        $id = $params['id'];
    
        $update = "UPDATE clientes SET nombres='$nombres', apellidos='$apellidos', email='$email', celular='$celular', direccion='$direccion', detalle='$detalle' WHERE id=$id";
        return mysqli_query($this->conexion, $update);
    }
    function delete($id){
        $delete = "DELETE FROM clientes WHERE id = $id";
        return mysqli_query($this->conexion, $delete; 
    }
    
     }
       

    
?>