<?php

require("conexion.php");

if (empty($id)) {
    $id = $_GET["id_colores"];
    print_r("eeror");
    $consultaDelete = "DELETE FROM colores WHERE id_colores=?";

    $sqlDelete = $con->prepare($consultaDelete);
    $sqlDelete->execute(array($id));

    $con = null;
    $sqlDelete = null;
    header('location: ../../index.php', true, 301);
}