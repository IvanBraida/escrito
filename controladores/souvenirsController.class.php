<?php

    require '../utils/autoloader.php';
    class souvenirsController extends souvenirsModelo{
        
        
        public static function altaDeSouvenirs( $nombre, $descripcion, $stock, $precio ){
            
            if( $nombre !== "" && $descripcion !== "" && $stock !== "" && $precio !== "" ){  
                try{
                    
                    $s = new souvenirsModelo(); 
                    $s -> nombre = $nombre;
                    $s -> descripcion = $descripcion;
                    $s -> stock = $stock;
                    $s -> precio = $precio;
                    $s -> guardarSouvenirs();
                        return generarHtml('insertar', ['exito' => true]);
                }
                catch(Exception $e){

                    return generarHtml('insertar'  , ['exito' => false]);
                    error_log($e -> getMessage());
                    return "No se pudo guardar el souvenir ";
               }
            }else{
                return generarHtml('insertar'  , ['exito' => false]);
            }
        }

        public static function eliminarSouvenirs($id){
            $u = new souvenirsModelo();
            $u -> id = $id;
            $u -> eliminarSouvenir();
            return header('Location: /bajaSouvenirs');
        }

        public static function mostrarSouvenir(){
            $s = new souvenirsModelo();
            $souvenires = $s -> listarSouvenir();
            return $souvenires;
        }

}