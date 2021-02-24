<?php

require("conexion.php");

if ($_GET) {
    if (!empty($_GET["color"]) || !empty($_GET["descripcion"])) {
        $color = $_GET["color"];
        $descripcion = $_GET["descripcion"];
        $id = $_GET["id_colores"];


        $consulta = 'UPDATE colores SET color=?, descripcion= ? WHERE id_colores=?';

        $sqlEdit = $con->prepare($consulta);
        $sqlEdit->execute(array($color, $descripcion, $id));
    }
    header('location: ../../index.php', true, 301);
}