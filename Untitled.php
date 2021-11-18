<?php
include('base de datos.php');

if (isset($_post['Registrar'])){
$email=$_post['email'];
$Fechadenacimiento=$_post['Fecha de nacimiento'];
$usuario=$_post['usuario'];
$contrasena=$_post['contrasena'];

$querry="insert into registro values('$email','$Fechadenacimiento','$usuario'$contrasena')"

}
header('inicio.php');