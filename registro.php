<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/registo.css">
    <link rel="icon" href="img/logo.jpg">
</head>
<body>
    <header class="header">
        <div class="logo">
            <a href="index.php"><img src="img/logo.jpg" alt="Logo de la marca"></a>
        </div>
        <nav>
           <ul class="nav-links">
                <li><a href="service.php">Servicios</a></li>
                <li><a href="portafolio.php">Portafolio</a></li>
                <li><a href="#">Acerca de</a></li>
           </ul>            
        </nav>
        <a class="btn"><button>Iniciar sesion</button></a>
      </header>
    <div class="box">
        <div class="container">
            <div class="top-header">
                <span>Memories Studio</span>
                <header>Crear cuenta</header>
            </div>
            <form action="altaRegistro.php" method="post">
                <div class="input-field">
                    <input type="text" class="input" name="nombre" placeholder="Nombre" required>
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-field">
                    <input type="text" class="input" name="apellido" placeholder="Apellido" required>
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-field">
                    <input type="email" class="input" name="email" placeholder="Correo electronico" required>
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-field">
                    <input type="number" class="input" name="telefono" placeholder="Telefono" required>
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-field">
                    <input type="password" class="input" name="contrasena" placeholder="Contraseña" required>
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-field">
                    <input type="password" class="input" name="validarContrasena" placeholder="Vuelve a escribir tu contraseña" required>
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-field">
                    <input type="text" class="input" name="direccion" placeholder="Direccion" required>
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-field">
                    <input type="date" class="input" name="fecha" placeholder="Fecha de registro" required>
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-field">
                    <input type="submit" class="submit" value="Crear cuenta">
                </div>
            </form>
        </div>
    </div>
</body>
</html>