<?php

require("conexion.php");
if ($_POST) {
    if (!empty($_POST['color']) && !empty($_POST['descripcion'])) {
        $color = $_POST['color'];
        $descripcion = $_POST['descripcion'];
        $id = $_POST['id_colores'];

        $consulta = 'INSERT INTO colores(color, descripcion) values (?,?)';

        $gsent = $con->prepare($consulta);
        $gsent->execute(array($color, $descripcion));
        $resultado = $gsent->fetchAll();
    }

    $con = null;
    $sqlDelete = null;
    header('location: ../../index.php ', true, 301);
}