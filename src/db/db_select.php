<?php

require("conexion.php");

$select = "SELECT * FROM colores";

$consulta = $con->prepare($select);
$consulta->execute();
$resultado = $consulta->fetchAll();


$con = null;
$sqlDelete = null;

?>
<!--  -->