<?php

    require '../utils/autoloader.php';
    class usuarioController extends UsuarioModelo{
        

        public static function iniciarSesion($usuario,$contrasenia){
            try{
                
              $u = new usuarioModelo();
              $u -> usuario = $usuario;
              $u -> contrasenia = $contrasenia;
              $u -> autenticar(); 
              self::crearSesion($u);

              header("Location: /menuPrincipal");
            
            }
            catch(Exception $e){
               
                error_log("fallo login del usuario ");
                generarHtml("login"  , ["falla" => true]);
            }
            
            
        }

        public static function MostrarLogin(){
            session_start();
            if(isset($_SESSION['autenticado'])) header ("Location: /menuPrincipal");
            else return cargarVista("login");
        
        }
    
        public static function MostrarMenuPrincipal(){
            session_start();
            if(!isset($_SESSION['autenticado'])) header("Location : /inicio");
            else return cargarVista("menuPrincipal");
        }
        private static function crearSesion($usuario){
            session_start();
            ob_start(); 
            $_SESSION['usuario'] = $usuario -> usuario;
            $_SESSION['autenticado'] = true; 
        }
      
      

        

}       