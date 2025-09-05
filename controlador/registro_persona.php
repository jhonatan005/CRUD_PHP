<?php
if (!empty($_POST["btnregistrar"])) {
    
    // Validar si todos los campos están llenos
    if (!empty($_POST["nombre"]) && !empty($_POST["cargo"]) && !empty($_POST["puesto"]) && !empty($_POST["edad"]) && !empty($_POST["fecha_ingreso"])) {
        
        // Obtener los datos del formulario
        $nombre = $_POST["nombre"];
        $cargo = $_POST["cargo"];
        $puesto = $_POST["puesto"]; // Asegúrate de que esta línea esté presente
        $edad = $_POST["edad"];
        $fecha_ingreso = $_POST["fecha_ingreso"];

        // Preparar la consulta SQL
        $sql = $conexion->query("INSERT INTO colaboradores(nombre, cargo, puesto, edad, fecha_ingreso)
                                 VALUES ('$nombre', '$cargo', '$puesto', '$edad', '$fecha_ingreso')");

        // Verificar si la consulta se ejecutó correctamente
        if ($sql) {
            echo '<div class="alert alert-success">Persona registrada correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error: Persona no registrada</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Todos los campos son obligatorios</div>';
    }
}
?>