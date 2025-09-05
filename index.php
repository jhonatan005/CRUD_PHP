<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>yametekudasai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/96c1b9b9c4.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #667eea;
            --primary-dark: #5a67d8;
            --secondary-color: #764ba2;
            --success-color: #48bb78;
            --danger-color: #f56565;
            --warning-color: #ed8936;
            --dark-color: #2d3748;
            --light-gray: #f7fafc;
            --border-color: #e2e8f0;
            --text-muted: #718096;
            --shadow-sm: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        * {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        body {
            background: white;
            min-height: 100vh;
            padding: 2rem 0;
            position: relative;
            overflow-x: hidden;
        }

        /* Animated background elements */
        body::before {
            content: '';
            position: fixed;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, 
                rgba(102, 126, 234, 0.05) 0%, 
                rgba(118, 75, 162, 0.05) 25%, 
                rgba(102, 126, 234, 0.03) 50%, 
                rgba(118, 75, 162, 0.02) 75%,
                rgba(102, 126, 234, 0.05) 100%);
            animation: backgroundSlide 15s ease-in-out infinite alternate;
            z-index: -2;
        }

        body::after {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                radial-gradient(circle at 20% 80%, rgba(102, 126, 234, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(118, 75, 162, 0.08) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(72, 187, 120, 0.05) 0%, transparent 50%);
            animation: floatingBubbles 20s ease-in-out infinite;
            z-index: -1;
        }

        @keyframes backgroundSlide {
            0% { transform: translateX(-10px) translateY(-10px) rotate(0deg); }
            100% { transform: translateX(10px) translateY(10px) rotate(2deg); }
        }

        @keyframes floatingBubbles {
            0%, 100% { 
                transform: translateX(0px) translateY(0px) scale(1); 
                opacity: 0.3;
            }
            33% { 
                transform: translateX(30px) translateY(-20px) scale(1.1); 
                opacity: 0.5;
            }
            66% { 
                transform: translateX(-20px) translateY(15px) scale(0.9); 
                opacity: 0.4;
            }
        }

        .main-container {
            background: white;
            border-radius: 20px;
            box-shadow: var(--shadow-lg);
            overflow: hidden;
            max-width: 1400px;
            margin: 0 auto;
            position: relative;
        }

        .main-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color), var(--success-color));
            animation: gradientShift 3s ease-in-out infinite alternate;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            100% { background-position: 100% 50%; }
        }

        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 2rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="white" fill-opacity="0.1"/><circle cx="75" cy="75" r="1" fill="white" fill-opacity="0.1"/><circle cx="50" cy="10" r="0.5" fill="white" fill-opacity="0.1"/><circle cx="10" cy="60" r="0.5" fill="white" fill-opacity="0.1"/><circle cx="90" cy="40" r="0.5" fill="white" fill-opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            animation: headerFloat 20s ease-in-out infinite;
        }

        @keyframes headerFloat {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(2deg); }
        }

        .header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            position: relative;
            z-index: 2;
            animation: titlePulse 4s ease-in-out infinite;
        }

        @keyframes titlePulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.02); }
        }

        .header .subtitle {
            font-size: 1.1rem;
            opacity: 0.9;
            position: relative;
            z-index: 2;
        }

        .form-card {
            background: white;
            border-radius: 16px;
            padding: 2rem;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--border-color);
            height: fit-content;
            position: sticky;
            top: 2rem;
            animation: cardFloat 6s ease-in-out infinite;
        }

        @keyframes cardFloat {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-5px); }
        }

        .form-card h3 {
            color: var(--dark-color);
            font-weight: 600;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .form-card h3::before {
            content: '👥';
            font-size: 1.5rem;
            animation: iconBounce 2s ease-in-out infinite;
        }

        @keyframes iconBounce {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }

        .form-control {
            border: 2px solid var(--border-color);
            border-radius: 12px;
            padding: 0.75rem 1rem;
            transition: all 0.3s ease;
            font-size: 0.95rem;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            transform: scale(1.02);
        }

        .form-label {
            font-weight: 500;
            color: var(--dark-color);
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            border: none;
            border-radius: 12px;
            padding: 0.75rem 2rem;
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            box-shadow: var(--shadow-sm);
            animation: buttonGlow 3s ease-in-out infinite alternate;
        }

        @keyframes buttonGlow {
            0% { box-shadow: var(--shadow-sm); }
            100% { box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3); }
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--secondary-color) 100%);
        }

        .table-container {
            background: white;
            border-radius: 16px;
            padding: 2rem;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--border-color);
            animation: tableFloat 8s ease-in-out infinite;
        }

        @keyframes tableFloat {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-3px); }
        }

        .table-header {
            display: flex;
            justify-content: between;
            align-items: center;
            margin-bottom: 1.5rem;
            gap: 1rem;
        }

        .table-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--dark-color);
            margin: 0;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .table-title::before {
            content: '📊';
            font-size: 1.3rem;
            animation: iconSpin 4s linear infinite;
        }

        @keyframes iconSpin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .table {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--border-color);
            margin: 0;
        }

        .table thead th {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            color: white;
            font-weight: 600;
            font-size: 0.9rem;
            padding: 1rem;
            border: none;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            position: relative;
            overflow: hidden;
        }

        .table thead th::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            animation: shimmer 3s infinite;
        }

        @keyframes shimmer {
            0% { left: -100%; }
            100% { left: 100%; }
        }

        .table tbody td {
            padding: 1rem;
            vertical-align: middle;
            border-bottom: 1px solid var(--border-color);
            font-size: 0.9rem;
        }

        .table tbody tr {
            transition: all 0.3s ease;
        }

        .table tbody tr:hover {
            background-color: rgba(102, 126, 234, 0.05);
            transform: scale(1.01);
        }

        .table tbody tr:last-child td {
            border-bottom: none;
        }

        .action-buttons {
            display: flex;
            gap: 0.5rem;
        }

        .action-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 35px;
            height: 35px;
            border-radius: 8px;
            transition: all 0.3s ease;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .edit-btn {
            background-color: rgba(237, 137, 54, 0.1);
            color: var(--warning-color);
            border: 1px solid rgba(237, 137, 54, 0.3);
        }

        .edit-btn:hover {
            background-color: var(--warning-color);
            color: white;
            transform: translateY(-2px) rotate(5deg);
            box-shadow: var(--shadow-sm);
        }

        .delete-btn {
            background-color: rgba(245, 101, 101, 0.1);
            color: var(--danger-color);
            border: 1px solid rgba(245, 101, 101, 0.3);
        }

        .delete-btn:hover {
            background-color: var(--danger-color);
            color: white;
            transform: translateY(-2px) rotate(-5deg);
            box-shadow: var(--shadow-sm);
        }

        .badge-puesto {
            background: linear-gradient(135deg, #48bb78, #38a169);
            color: white;
            padding: 0.3rem 1rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
            min-width: 120px;
            display: inline-block;
            text-align: center;
            animation: badgePulse 3s ease-in-out infinite;
        }

        @keyframes badgePulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        .animate-in {
            animation: slideInUp 0.6s ease-out;
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .empty-state {
            text-align: center;
            padding: 3rem;
            color: var(--text-muted);
        }

        .empty-state i {
            font-size: 3rem;
            margin-bottom: 1rem;
            opacity: 0.5;
            animation: emptyStateBounce 2s ease-in-out infinite;
        }

        @keyframes emptyStateBounce {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        @media (max-width: 768px) {
            .main-container {
                margin: 1rem;
                border-radius: 16px;
            }

            .header {
                padding: 1.5rem;
            }

            .header h1 {
                font-size: 2rem;
            }

            .form-card,
            .table-container {
                margin: 1rem;
                padding: 1.5rem;
            }

            .table-responsive {
                border-radius: 12px;
                overflow: hidden;
            }
        }

        /* Custom select styling */
        .form-select {
            border: 2px solid var(--border-color);
            border-radius: 12px;
            padding: 0.75rem 1rem;
            transition: all 0.3s ease;
        }

        .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            transform: scale(1.02);
        }

        /* Floating particles effect */
        .floating-particle {
            position: fixed;
            pointer-events: none;
            z-index: -1;
        }

        .particle-1 {
            top: 20%;
            left: 10%;
            width: 4px;
            height: 4px;
            background: var(--primary-color);
            border-radius: 50%;
            animation: floatParticle1 8s linear infinite;
        }

        .particle-2 {
            top: 60%;
            right: 15%;
            width: 6px;
            height: 6px;
            background: var(--secondary-color);
            border-radius: 50%;
            animation: floatParticle2 10s linear infinite;
        }

        .particle-3 {
            bottom: 30%;
            left: 20%;
            width: 3px;
            height: 3px;
            background: var(--success-color);
            border-radius: 50%;
            animation: floatParticle3 12s linear infinite;
        }

        @keyframes floatParticle1 {
            0% { transform: translateY(0px) translateX(0px) rotate(0deg); opacity: 0; }
            10% { opacity: 0.5; }
            90% { opacity: 0.5; }
            100% { transform: translateY(-100px) translateX(50px) rotate(360deg); opacity: 0; }
        }

        @keyframes floatParticle2 {
            0% { transform: translateY(0px) translateX(0px) rotate(0deg); opacity: 0; }
            10% { opacity: 0.3; }
            90% { opacity: 0.3; }
            100% { transform: translateY(-120px) translateX(-40px) rotate(-360deg); opacity: 0; }
        }

        @keyframes floatParticle3 {
            0% { transform: translateY(0px) translateX(0px) rotate(0deg); opacity: 0; }
            10% { opacity: 0.4; }
            90% { opacity: 0.4; }
            100% { transform: translateY(-80px) translateX(30px) rotate(180deg); opacity: 0; }
        }
    </style>
</head>

<body>
    <!-- Floating particles -->
    <div class="floating-particle particle-1"></div>
    <div class="floating-particle particle-2"></div>
    <div class="floating-particle particle-3"></div>

    <script>
        function eliminar(){
            var respuesta= confirm("¿lo vas a eliminar 🤨?");
            return respuesta
        }
    </script>

    <div class="main-container animate-in">
        <div class="header">
            <h1>Registro de Colaboradores</h1>
            <p class="subtitle">Administración eficiente del equipo de trabajo</p>
        </div>

        <?php
        include "modelo/conexion.php";
        include "controlador/eliminar_persona.php";
        ?>

        <div class="container-fluid p-4">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="form-card">
                        <h3>Registro del personal</h3>
                        
                        <?php
                        include "controlador/registro_persona.php";
                        ?>
                        
                        <form method="POST">
                            <div class="mb-3">
                                <label class="form-label">
                                    <i class="fas fa-user me-2"></i>Nombre completo
                                </label>
                                <input type="text" class="form-control" name="nombre" placeholder="Ingrese el nombre completo" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">
                                    <i class="fas fa-briefcase me-2"></i>Cargo
                                </label>
                                <input type="text" class="form-control" name="cargo" placeholder="Ej: Desarrollador Senior" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">
                                    <i class="fas fa-tags me-2"></i>Puesto de trabajo
                                </label>
                                <select class="form-select" name="puesto" id="puesto" required>
                                    <option value="">Seleccione un puesto</option>
                                    <option value="Diseño Web">🎨 Diseño Web</option>
                                    <option value="Diseño Gráfico">🖼️ Diseño Gráfico</option>
                                    <option value="Community Manager">📱 Community Manager</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">
                                    <i class="fas fa-birthday-cake me-2"></i>Edad
                                </label>
                                <input type="number" class="form-control" name="edad" placeholder="Edad" required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">
                                    <i class="fas fa-calendar-alt me-2"></i>Fecha de ingreso
                                </label>
                                <input type="date" class="form-control" name="fecha_ingreso" required>
                            </div>

                            <button type="submit" class="btn btn-primary w-100" name="btnregistrar" value="ok">
                                <i class="fas fa-user-plus me-2"></i>Registrar Personal
                            </button>
                        </form>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="table-container">
                        <div class="table-header">
                            <h4 class="table-title">Personal Registrado</h4>
                        </div>

                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">#ID</th>
                                        <th scope="col">👤 Nombre</th>
                                        <th scope="col">💼 Cargo</th>
                                        <th scope="col">🏢 Puesto</th>
                                        <th scope="col">🎂 Edad</th>
                                        <th scope="col">📅 Fecha ingreso</th>
                                        <th scope="col">⚙️ Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include "modelo/conexion.php";
                                    $sql=$conexion->query(" select * from colaboradores");
                                    $count = 0;
                                    while($datos=$sql->fetch_object()){
                                        $count++;
                                    ?>
                                    <tr class="animate-in" style="animation-delay: <?= $count * 0.1 ?>s">
                                        <td><strong>#<?= str_pad($datos->id, 3, '0', STR_PAD_LEFT) ?></strong></td>
                                        <td><?= htmlspecialchars($datos->nombre) ?></td>
                                        <td><?= htmlspecialchars($datos->cargo) ?></td>
                                        <td><span class="badge-puesto"><?= htmlspecialchars($datos->puesto) ?></span></td>
                                        <td><?= $datos->edad ?> años</td>
                                        <td><?= date('d/m/Y', strtotime($datos->fecha_ingreso)) ?></td>
                                        <td>
                                            <div class="action-buttons">
                                                <a href="modificar_producto.php?id=<?= $datos->id ?>" class="action-btn edit-btn" title="Editar registro">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a onclick="return eliminar()" href="index.php?id=<?= $datos->id ?>" class="action-btn delete-btn" title="Eliminar registro">
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                    }
                                    
                                    if($count == 0) {
                                    ?>
                                    <tr>
                                        <td colspan="7">
                                            <div class="empty-state">
                                                <i class="fas fa-users"></i>
                                                <h5>No hay personal registrado</h5>
                                                <p class="mb-0">Comienza agregando el primer miembro del equipo</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    
    <script>
        // Auto-set today's date as default for fecha_ingreso
        document.addEventListener('DOMContentLoaded', function() {
            const fechaInput = document.querySelector('input[name="fecha_ingreso"]');
            if (fechaInput && !fechaInput.value) {
                const today = new Date().toISOString().split('T')[0];
                fechaInput.value = today;
            }
        });

        // Add smooth scrolling and better form validation
        document.querySelector('form').addEventListener('submit', function(e) {
            const inputs = this.querySelectorAll('input[required], select[required]');
            let hasError = false;
            
            inputs.forEach(input => {
                if (!input.value.trim()) {
                    input.style.borderColor = 'var(--danger-color)';
                    hasError = true;
                } else {
                    input.style.borderColor = 'var(--border-color)';
                }
            });
            
            if (hasError) {
                e.preventDefault();
                alert('⚠️ Por favor, complete todos los campos requeridos');
            }
        });

        // Add animation on table row hover
        document.querySelectorAll('.table tbody tr').forEach(row => {
            row.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.01)';
                this.style.transition = 'transform 0.2s ease';
            });
            
            row.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1)';
            });
        });
    </script>
</body>

</html>