<?php
session_start();

$conn= mysqli_connect(
'localhost'
'root'
'',
'users'
)or die(mysqli_error($mysqli));
if(iseet($conn)){
	echo'base de datos conectada';
}
?>