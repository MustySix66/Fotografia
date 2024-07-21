<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
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
        <a class="btn" href="login.php"><button>Iniciar sesion</button></a>
        </header>
    <div class="box">
        <div class="container">
            <div class="top-header">
                <span>Memories Studio</span>
                <header>Iniciar Sesión</header>
            </div>
            <div class="input-field">
                <input type="text" class="input" placeholder="Usuario" required>
                <i class="bx bx-user"></i>
            </div>
            <div class="input-field">
                <input type="password" class="input" placeholder="Contraseña" required>
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-field">
                <input type="submit" class="submit" value="Inicio">
            </div>
            <div class="input-field">
                <a href="registro.php"><input type="submit" class="submit" value="Registrarse"></a>
            </div>
            <div class="bottom">
                <div class="left">
                    <input type="checkbox" id="check">
                    <label for="check">Recordarme</label>
                </div>
                <div class="right">
                    <label><a href="#">¿Olvidaste tu contraseña?</a></label>
                </div>    
            </div>
        </div>
    </div>
</body>
</html>