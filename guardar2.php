<?php
$conectar=@mysql_connect('localhost','root','','prueba2');
if(!$conectar){
    echo"no se puede conectar con el servidor";
}else{
    $base=mysql_select_db('prueba2');
    if(!$base){
        echo"no se encontro la base de datos";
    }
}
$nombre=$_post['nombre'];
$coreo=$_post['correo'];
$mensaje=$_post['mensaje'];
$sql="INSERT INTO datos VALUES('$nombre', '$correo', '$mensaje')";
$ejecutar=mysql_query($sql);
if(!$ejecutar){
    echo"hubo algun error";
}else{
    echo"datos guardados correctamente<br><a href='op5.html'>volver</a>";
}
?>