<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de proyectos</title>
    <link rel="stylesheet" href="vista/css/bootstrap.min.css">
    <script src="vista/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="vista/css/style.css">
</head>
<body>
    <header>
        <nav id="navbar">
            <div class="Contenedor">
                <img src="vista/img/logo.png" alt="Logo" class="Logo">
                <ul class="Texto-menu">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="quiensoy.php">¿Quién soy?</a></li>
                    <?php
                        session_start();
                        if(isset($_SESSION["correoUsuario"])){
                            if($_SESSION["tipoUsuario"]=='1'){
                                echo '<li><a href="index.php?p=mostrarproyectos">Proyectos</a></li>';
                                echo '<li><a href="index.php?u=mostrarusuarios">Usuarios</a></li>';
                            }   
                              else{
                                echo '<li><a href="index.php?p=mostrarproyectos">Pedidos</a></li>';
                              }                                            
                        }
                        ?> 
                    <li><a href="index.php?i=contacto">Contáctanos</a></li>  
                    <li>
                    <?php
                        //session_start();
                        if(isset($_SESSION["correoUsuario"])){
                            echo $_SESSION["correoUsuario"]; 
                            echo $_SESSION["tipoUsuario"]; 
                            echo '<a href="index.php?i=cerrarSesion">Cerrar Sesión</a>';                        
                        }
                        ?> 
                    </li>             
                </ul>
            </div>
        </nav>
        <div id="MostrarSlider">
            <div class="Slider-DatosPersonales">
                <h1>Licenciatura en sistemas Computacionales</h1>
                <p class="Perfil">
                <?php                   
                    if(isset($_SESSION["correoUsuario"])){
                         echo $_SESSION["nombreUsuario"];
                    }
                ?> 
                </p>
                <a href="index.php?i=login" class="btn btn-primary">Suscribirme</a>
            </div>
        </div>
    </header>
    
    
    <main>