<?php
include "modelo/conexion.php";
$id=$_GET["id"];

$sql=$conexion->query(" select * from colaboradores where id= $id ");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        /* Fondo suave */
        body {
            background: #e3e6ec;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: "Segoe UI", sans-serif;
        }

        /* Contenedor más delicado */
        form {
            background: #e3e6ec;
            border-radius: 16px;
            padding: 25px;
            box-shadow: 6px 6px 12px #c8c9cc,
                        -6px -6px 12px #e4e4e4ff;
            width: 100%;
            max-width: 380px;
        }

        h3 {
            text-align: center;
            font-weight: 600;
            color: #0d1b2a;
            margin-bottom: 15px;
        }

        /* Inputs suaves y naturales */
        .form-control,
        .form-select {
            background: #e3e6ec;
            border: none;
            border-radius: 10px;
            box-shadow: inset 2px 2px 4px #dadadaff,
                        inset -2px -2px 4px #d8d8d8ff;
            padding: 8px 12px;
            color: #0d1b2a;
            font-weight: 500;
            transition: all 0.2s ease;
            margin-bottom: 10px;
        }

        .form-control:focus,
        .form-select:focus {
            outline: none;
            box-shadow: inset 1px 1px 2px #fbfbfcff,
                        inset -1px -1px 2px #ffffff4c,
                        0 0 0 3px rgba(192, 192, 192, 0.15);
        }

        label {
            color: #0d1b2a;
            font-weight: 500;
            font-size: 0.9rem;
            margin-top: 6px;
            margin-bottom: 3px;
            display: block;
        }

        /* Botón con efecto sutil */
        .btn-primary {
            background: #0d1b2a;
            border: none;
            border-radius: 10px;
            box-shadow: 3px 3px 6px #c8c9cc,
                        -3px -3px 6px #ffffff32;
            font-weight: 600;
            padding: 8px;
            width: 100%;
            transition: all 0.2s ease;
            margin-top: 10px;
        }

        .btn-primary:hover {
            background: #142b3e;
            box-shadow: inset 2px 2px 4px #0a1724,
                        inset -2px -2px 4px #1a3246;
            transform: scale(0.99);
        }
    </style>
</head>

<body>
    <form method="POST">
        <h3>Modificar personal</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
        <?php
        include "controlador/modificar_persona.php";
        while($datos=$sql->fetch_object()){?>
        <div class="mb-2">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre?>">

            <label class="form-label">Cargo</label>
            <input type="text" class="form-control" name="cargo" value="<?= $datos->cargo?>">

            <label class="form-label">Puesto</label>
            <select class="form-select" name="puesto" id="puesto">
                <option disabled>Puesto</option>
                <option value="Diseño Web" <?= ($datos->puesto == 'Diseño Web') ? 'selected' : '' ?>>Diseño Web</option>
                <option value="Diseño Gráfico" <?= ($datos->puesto == 'Diseño Gráfico') ? 'selected' : '' ?>>Diseño Gráfico</option>
                <option value="Community Manager" <?= ($datos->puesto == 'Community Manager') ? 'selected' : '' ?>>Community Manager</option>
            </select>

            <label class="form-label">Edad</label>
            <input type="number" class="form-control" name="edad" value="<?= $datos->edad?>">

            <label class="form-label">Fecha</label>
            <input type="date" class="form-control" name="fecha_ingreso" value="<?= $datos->fecha_ingreso?>">
        </div>
        <?php } ?>
        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar</button>
    </form>
</body>

</html>
