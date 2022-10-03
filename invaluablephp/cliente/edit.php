<?php
include('../config/config.php');
include('cliente.php');
$p = new cliente();
$dp = mysqli_fetch_object($p->getOne($_GET['id']));


if (isset($_POST) && !empty($_POST)){
$update = $p->update($_POST);

if ($update){

$mensaje = '<div class="alert alert-success" role="alert"> cliente modificado correctamente </div>';

}else{

$mensaje = '<div class="alert alert-danger" role="alert" >Error al modificar el cliente </div>';
}
}
?>

<!DOCTYPE html>
<html>

   <head>
    <meta charset="UTF-8">
    
    <title> Modificar cliente</title>
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

      <h2 class="text-center mb-5" >Modificar cliente </h2>
      <form method="POST" enctype="multipart/form-data" >
        <div class="row mb-2">
            <div class="col">
                <input type="text" name="nombres" id="nombres" placeholder="Nombre cliente" class="form-control" value="<?= $dp->nombres?>" >

            </div>
            <div class="col">
               <input type="text" name="apellidos" id="apellidos" placeholder="Apellido cliente" class="form-control" value="<?= $dp->apellidos?>">

            </div>
        </div>
        
        <div class="row mb-2">
            <div class="col">
                <input type="email" name="email" id="email" placeholder="Email cliente" class="form-control" value="<?= $dp->email?>">

            </div>
            <div class="col">
               <input type="number" name="celular" id="celular" placeholder=" Celular cliente" class="form-control" value="<?= $dp->celular?>">

            </div>
        </div>


        <div class="row mb-2">
            <div class="col">
                <input type="text" name="direccion" id="direccion" placeholder="direccion cliente"  class="form-control" value="<?= $dp->direccion?>" >

            </div>
            <div class="col">
               <input type="text" name="detalle" id="detalle" placeholder="detalles " class="form-control" value="<?= $dp->detalles?>">

            </div>
        </div>
        
        
        <button  class="btn btn-success"> Registrar </button>

      </form>
   </div>
  </body>
</html>