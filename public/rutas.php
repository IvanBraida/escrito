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
        

   
    }