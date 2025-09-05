<?php

if (!empty($_POST["btnregistrar"])){
    if (!empty($_POST["nombre"]) and !empty($_POST["cargo"]) and !empty($_POST["puesto"]) and !empty($_POST["edad"]) and !empty($_POST["fecha_ingreso"])){
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $cargo = $_POST["cargo"];
        $puesto = $_POST["puesto"];
        $edad = $_POST["edad"];
        $fecha_ingreso = $_POST["fecha_ingreso"];
        $sql=$conexion->query("update colaboradores set nombre='$nombre', cargo='$cargo', puesto='$puesto', edad=$edad, fecha_ingreso='$fecha_ingreso' where id=$id");
        if ($sql==1){
            header("location:index.php");
        }else{
            echo "<div class='alert alert-danger'>error al modificar</div>";
        }
    }else{
        echo "<div class='alert alert-warning'>campos vacios</div>";
    }

}

?>