<?php
include_once('../config/config.php');
include('cliente.php');


if ( isset($_POST) && !empty($_POST)){
     $p= new cliente();

   
  
  
    $save = $p->save($_POST); 
    if($save){
      $mensaje= '<div class="alert alert-success" role="alert">cliente creado correctamente </div>' ;
    }else{
      $mensaje= '<div class="alert alert-danger" role="alert"> Error al crear el cliente </div>';
    }
  }
?>

<!DOCTYPE html>
<html>

   <head>
    <meta charset="UTF-8">
    
    <title>Crear cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  
   </head>
  <body>
      <?php include('../menu.php') ?>
   <div class="container">
     <?php 
      if (isset($mensaje)){
        echo $mensaje;
      }
      ?>

      <h2 class="text-center mb-5" >Crear cliente </h2>
      <form method="POST" enctype="multipart/form-data" >
        <div class="row mb-2">
            <div class="col">
                <input type="text" name="nombres" id="nombres" placeholder="Nombre cliente" class="form-control" >

            </div>
            <div class="col">
               <input type="text" name="apellidos" id="apellidos" placeholder="Apellido cliente" class="form-control" >

            </div>
        </div>
        
        <div class="row mb-2">
            <div class="col">
                <input type="email" name="email" id="email" placeholder="Email cliente" class="form-control" >

            </div>
            <div class="col">
               <input type="number" name="celular" id="celular" placeholder=" Celular cliente" class="form-control" >

            </div>
        </div>


        <div class="row mb-2">
            <div class="col">
                <input type="text" name="direccion" id="direccion" placeholder="direccion cliente"  class="form-control" >

            </div>
            <div class="col">
               <input type="text" name="detalle" id="detalle" placeholder="detalles " class="form-control" >

            </div>
        </div>
        
        
        <button  class="btn btn-success"> Registrar </button>

      </form>
   </div>
  </body>
</html>