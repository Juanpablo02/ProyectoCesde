<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>/css/main_style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/css/register_style.css">
    <link rel="icon" href="<?php echo base_url();?>/img/home.ico">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300&family=Open+Sans:wght@300&family=Raleway:wght@100;200;300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Alquiler de Apartamentos</title>

    <style>
        .bg{
            background-image: url(../public/img/Houses-villa-cottage_iphone_640x960.jpg);
            background-position: center, center;
        } 
        body{
            background: linear-gradient(to right, #292929, #8D8D8D, #292929)
        }
        #success{
            color: #51FF00;
        }
        #error{
            color: #DD1818;
        }
    </style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand">
            <img class="mx-3" src="img/c3.svg" alt="" width="50" height="35">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php if($rol == ""):?>

            <div class="collapse navbar-collapse" id="navbarNavDropdown"> 
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="login">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register">Registrarse</a>
                    </li>
                </ul>
            </div>
        
        <?php endif?>
        <?php if($rol == "Invitado"):?>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="aparts">Apartamentos</a>
                    </li>
                </ul>
                <a class="navbar-brand" href="<?php echo base_url().'/sign-out'?>">Cerrar Sesión</a>
                <a class="navbar-brand" href="profile">
                    Perfil
                    <img src="img/user.svg" alt="" width="40" height="30">
                </a>
            </div>

        <?php endif?>
        <?php if($rol == "Anfitrion"):?>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="aparts">Apartamentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registerApart">Registrar Apartamento</a>
                    </li>
                </ul>
                <a class="navbar-brand" href="<?php echo base_url().'/sign-out'?>">Cerrar Sesión</a>
                <a class="navbar-brand" href="profile">
                    Perfil
                    <img src="img/user.svg" alt="" width="40" height="30">
                </a>
            </div>

        <?php endif?>

    </div>
</nav>