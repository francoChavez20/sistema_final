<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <!--BARRA-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/views/plantilla/estilos.css">
    <!--BARRA-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const base_url = '<?php echo BASE_URL ?>';
    </script>
</head>

<body style="background-color: #F4E5FF;">
    <div class="container-fluid p-0">
        <!--BARRA -->

        <!--BARRA 2-->
        <nav class="navbar navbar-expand-lg" style="background-color: #b040f1;" data-bs-theme="dark">
            <div class="container-fluid">

                <a class="navbar-brand" href="#">
                    <img src="./views/plantilla/IMG/mils.png" alt="Bootstrap" width="80" height="60">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"
                            style="background: #c87ef3;margin-left: 70px; margin-right: 70px;font-size: 17px; border-radius: 10px;">
                            <a class="nav-link" aria-current="page" href="<?php echo BASE_URL ?>productos">Inicio</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false"
                                style="background: #c87ef3;margin-right: 70px;font-size: 17px; border-radius: 10px;">
                                Categorias </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo BASE_URL ?>damas">Damas</a></li>
                                <li><a class="dropdown-item" href="<?php echo BASE_URL ?>caballeros">Caballeros</a></li>
                                <li><a class="dropdown-item" href="<?php echo BASE_URL ?>niñosyniñas">Niños y Niñas</a></li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                style="background: #c87ef3; margin-right: 70px; font-size: 17px; border-radius: 10px;"
                                href="<?php echo BASE_URL ?>lomasvendido">Lo mas vendido</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link"
                                style="background: #c87ef3; margin-right: 70px; font-size: 17px;border-radius: 10px;"
                                href="<?php echo BASE_URL ?>promociones">Promociones</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link"
                                style="background: #c87ef3;margin-right: 70px; font-size: 17px;border-radius: 10px;"
                                href="<?php echo BASE_URL ?>conocenos">Conocenos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link"
                                style="background: #c87ef3;margin-right: 70px; font-size: 17px;border-radius: 10px;"
                                href="<?php echo BASE_URL ?>calificaciones">Calificaciones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                style="background: #c87ef3;margin-right: 70px;font-size: 17px; border-radius: 10px;"
                                href="<?php echo BASE_URL ?>historial">Historia</a>
                        </li>

                    </ul>
                    <!--BUSCAR-->
                    <form class="d-flex" role="search">
                        <input class="form-control me-4" type="search" placeholder="Buscar Información"
                            aria-label="Search" style="background-color: #c680ee;">
                        <button class="btn btn-outline-success" type="submit"
                            style="background-color: #c786fc;">Buscar</button>


                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a href="<?php echo BASE_URL ?>carrito"><img src="./views/plantilla/IMG/carrito-removebg-preview.png" alt="50"
                                        height="60"></a>
                            </li>
                            <!--despegable de usuario-->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" style="margin-right: 80px;" href="" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false"><?php echo 'Hola, ' . $_SESSION['sesion_ventas_nombres'] ?></a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?php echo BASE_URL ?>perfilUsuario">Perfil</a></li>
                                    <li><a class="dropdown-item" href="<?php echo BASE_URL ?>carrito">Carrito</a style="background-color: #c786fc;"></li>
                                    <li><a class="dropdown-item" href="<?php echo BASE_URL ?>favoritosUsuarios">Mis Favoritos</a></li>
                                    <li><a class="dropdown-item" onclick="cerrar_sesion();">Cerrar Sesión</a 
                                    style="background-color: #c786fc;"></li>
                                    



                                </ul>
                            </li>

                        </ul>

                    </form>
                    <!--BUSCAR-->

                </div>
            </div>
        </nav>