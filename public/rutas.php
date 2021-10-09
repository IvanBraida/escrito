<?php
    require '../utils/autoloader.php';

    $request = $_SERVER['REQUEST_URI'];
    switch($request){

        case'/':
            cargarVista('login');
            break;

        case '/iniciarSesion':
                if($_SERVER['REQUEST_METHOD'] === 'POST') usuarioController::iniciarSesion($_POST['usuario'],$_POST['contrasenia']);
                if($_SERVER['REQUEST_METHOD'] === 'GET') usuarioController::MostrarLogin();
            break;
        case '/menuPrincipal':
                cargarVista('menuPrincipal');
            break;  

        case '/insertarSouvenirs':
            cargarVista('insertar');
            break;  

        case '/insertar':
            if($_SERVER['REQUEST_METHOD'] === 'POST') souvenirsController::altaDeSouvenirs($_POST['nombre'], $_POST['descripcion'], $_POST['stock'], $_POST['precio']);
            if($_SERVER['REQUEST_METHOD'] === 'GET') cargarVista('insertar');
            break;          

        case '/bajaSouvenirs':
            cargarVista('borrarSouvenir');
            break;

        case '/borrar':
            if($_SERVER['REQUEST_METHOD'] === "POST") souvenirsController::eliminarSouvenirs($_POST['id']);
            break;
        case '/listarSouvenir':
            cargarVista('listarSouvenir');
            break;    
       
    }