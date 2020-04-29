<?php
 
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="prueba3";

 
 $con = mysqli_connect('localhost','root','','prueba3')or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");


 
 $nombre=$_POST['nombre'];
 $correo=$_POST['correo'];
 $mensaje=$_POST['mensaje'];
 
 $sql="INSERT INTO datos VALUES('$nombre',
           '$correo',
           '$mensaje')";
 
 $ejecutar=mysqli_query($con,$sql);
  
 if(!$ejecutar){
  echo"Hubo Algun Error";
 }else{
  echo"Datos Guardados Correctamente<br><a href='op5.html'>Volver</a>";
 }
?>