<?php

    echo"<h1>Recibiendo informacion del formulario de registro</h1>";

    $tipo = $_GET['tipo_h'];
    $codigo = $_GET['id_h'];
    $empleado = $_GET['empleado_h'];
    $cliente = $_GET['cliente'];
    $fe= $_GET['fe_h'];
    $fs = $_GET['fs_h'];
    $cantidad = $_GET['cantidad_h'];
    $precio = $_GET['precio_h'];
    
    include("conexion.php");

    $sql="INSERT INTO reservas VALUE ('$codigo','$empleado','$tipo','$cliente','$fe','$fs',$cantidad,$precio)";

    //condicion para evaluar registro correctamente habitacion

    if(mysqli_query($conn,$sql))
    {
      echo " habitacion registrado correctamente ";
    }
    else{
      echo "error".$sql."<br>".mysqli_error($conn);
    }

    $sql
?>

<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

  <section style ="padding: 20px">
    
  <table class="table" style="margin:15; padding:20;" style="background:white;  color:black;  border-color:#8F3A84;">
    <thead style ="background:#35b3a7;">
      <th scope="col" style= "border-collapse:collapse;"  width="200" >Tipo</th>
      <th scope="col" style= "border-collapse:collapse;"  width="200" >codigo</th>
      <th scope ="col" style= "border-collapse:collapse;"  width="200">empleado</th>
      <th scope="col" style= "border-collapse:collapse;"  width="200" >Nombre del cliente</th>
      <th scope="col" style= "border-collapse:collapse;"  width="200" >fecha de entrada</th>
      <th scope="col" style= "border-collapse:collapse;"  width="200" >fecha de salida</th>
      <th scope ="col" style= "border-collapse:collapse;"  width="200">cantidad</th>
      <th scope="col" style= "border-collapse:collapse;"  width="200" >Precio</th>
    </thead>
    <tbody>
      <tr>
        <td style="text-align: center;"><?=$tipo?></td>
        <td style="text-align: center;"><?=$codigo?></td>
        <td style="text-align: center;"><?=$empleado?></td>
        <td style="text-align: center;"><?=$cliente?></td>
        <td style="text-align: center;"><?=$fe?></td>
        <td style="text-align: center;"><?=$fs?></td>
        <td style="text-align: center;"><?=$cantidad?></td>
        <td style="text-align: center;"><?=$precio?></td>

        <td><button style="background:orange; color:white;">Eliminar</button>
         <button style ="background:yellow; color:black;">Modificar</button></td>
      </tr>
  
  </section>

</body>

</html>
