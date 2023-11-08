<?php
    $admin=0;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tajeta Digital - Crea Software</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="img/favicon-100x100.ico" type="image/x-icon">
</head>
<body>
    <header id="Header">
        <img src="img/logotipocrea-236x130.png" class="logo" alt="Logotipo CreaSoftware" title="CreaSoftware">
        <input type="checkbox" id="menu" />
        <label for="menu">
            <div class="menu-icono" id="circle">
                <i class='bx bx-menu' id="abrir"></i>
                <i class='bx bx-x' id="cerrar"></i>
            </div>
        </label>
                <ul class="menu">
                    <li class="item"><a href="">Home</a></li>
                    <?php if($admin == 1) : ?>
                    <li class="item"><a href="">Roles de usuario</a></li>
                    <li class="item"><a href="">Plantillas</a></li>
                    <li class="item"><a href="">Panel de administración</a></li>
                    <?php endif; ?>
                    <?php if($admin > 1 ) : ?>
                    <li class="item"><a href="">Panel de control</a></li>
                    <li class="btn"><a href="">Cerrar sesión</a></li>
                    <?php endif; ?>
                    <li class="btn"><a href="">Iniciar sesión</a></li>
                    <li class="btn"><a href="">Regístrate</a></li>
                </ul>   
    </header>

</body>
</html>