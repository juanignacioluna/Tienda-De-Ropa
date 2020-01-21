<?php

session_start();

$yo = $_SESSION['username'];

include('config.php');



$sql_query = "select * from usuarios where email='".$yo."'";
$result = mysqli_query($con,$sql_query);
$row = mysqli_fetch_array($result);


if(isset($row['nombre'])){

    $nombre = $row['nombre'];

}else{

    $nombre="";
}

if(isset($row['dni'])){

    $dni = $row['dni'];

}else{

    $dni="";
}

if(isset($row['cumple'])){

    $cumple = $row['cumple'];

}else{

    $cumple="";
}

if(isset($row['sexo'])){

    $sexo = $row['sexo'];

}else{

    $sexo="";
}

if(isset($row['telefono'])){

    $telefono = $row['telefono'];

}else{

    $telefono="";
}

if(isset($row['calle'])){

    $calle = $row['calle'];

}else{

    $calle="";
}

if(isset($row['nro'])){

    $nro = $row['nro'];

}else{

    $nro="";
}

if(isset($row['codigoPostal'])){

    $codigoPostal = $row['codigoPostal'];

}else{

    $codigoPostal="";
}

if(isset($row['ciudad'])){

    $ciudad = $row['ciudad'];

}else{

    $ciudad="";
}

if(isset($row['provincia'])){

    $provincia = $row['provincia'];

}else{

    $provincia="";
}




echo '<div id="p2">
<h1 style="text-align: center; margin-top: 20px;">Información Personal</h1>
<hr>
<a style="margin-bottom:20px;" class="btn btn-secondary" href="micuenta.php" role="button"><i class="fas fa-arrow-left"></i>VOLVER</a>     
<div class="row">
   <div class="col-sm">
      <h4><i class="fas fa-user"></i> Datos Personales</h4>
      <form method="post" action="datosPersonal.php">
         <div class="form-group"> <label>Nombre Completo</label> <input value="'.$nombre.'" name="nombre" type="text" class="form-control" placeholder="Nombre Completo"> </div>
         <div class="form-group"> <label>DNI</label> <input value="'.$dni.'" name="dni" type="text" class="form-control" placeholder="DNI"> </div>
         <div class="form-group"> <label>Teléfono</label> <input value="'.$telefono.'" name="telefono" type="text" class="form-control" placeholder="Teléfono"> </div>
         <div class="form-group">
            <label for="exampleFormControlSelect1">Sexo</label> 
            <select value="'.$sexo.'" name="sexo" class="form-control">
               <option>Hombre</option>
               <option>Mujer</option>
            </select>
         </div>
         <div class="form-group"> <label>Cumpleaños</label> <input value="'.$cumple.'" name="cumple" type="date" class="form-control" placeholder="Cumpleaños"> </div>
         <button type="submit" class="btn btn-dark">Actualizar Datos Personales</button> 
      </form>
   </div>
   <div class="col-sm">
      <h4><i class="fab fa-telegram-plane"></i> Datos de Entrega</h4>
      <form action="datosEntrega.php" method="POST">
         <div class="form-group"> <label>Calle</label> <input value="'.$calle.'" name="calle" type="text" class="form-control" placeholder="Calle"> </div>
         <div class="form-group"> <label>Nro</label> <input value="'.$nro.'" name="nro" type="text" class="form-control" placeholder="Nro"> </div>
         <div class="form-group"> <label>Codigo Postal</label> <input value="'.$codigoPostal.'" name="cp" type="text" class="form-control" placeholder="Codigo Postal"> </div>
         <div class="form-group"> <label>Ciudad</label> <input value="'.$ciudad.'" name="ciudad" type="text" class="form-control" placeholder="Ciudad"> </div>
         <div class="form-group"> <label>Provincia</label> <input name="provincia" value="'.$provincia.'" type="text" class="form-control" placeholder="Provincia"> </div>
         <button type="submit" class="btn btn-dark">Actualizar Datos de Entrega</button> 
      </form>
   </div>
</div>
</div>';












?>