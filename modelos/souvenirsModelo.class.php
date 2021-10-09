<?php

    require '../utils/autoloader.php';
    class souvenirsModelo extends Modelo{

        public $id; 
        public $nombre;
        public $descripcion;
        public $stock;
        public $precio; 
        
        
        public function guardarSouvenirs(){
                $this -> prepararInsercion();
                $this -> sentencia -> execute();
                return true;
            
            if($this -> sentencia -> error){
                throw new Exception("Lo sentimos hubo un problema al registrar al usuario" . $this -> sentencia -> error);
            }
        }
        private function prepararInsercion(){
            $sql = "INSERT INTO souvenirs ( nombre,descripcion,stock,precio ) VALUES (?,?,?,?)";
            $this -> sentencia = $this -> conexion -> prepare($sql);
            $this -> sentencia -> bind_param("ssii",
            $this -> nombre,
            $this -> descripcion ,
            $this -> stock,
            $this -> precio
            );

    }
    public function eliminarSouvenir(){
        $this -> prepararEliminacionDeSouvenir($this -> id);
        $this-> sentencia -> execute();
    }
    private function prepararEliminacionDeSouvenir($id){
        $sql = "DELETE FROM souvenirs WHERE id= ?";
        $this -> sentencia = $this -> conexion -> prepare($sql);
        $this -> sentencia -> bind_param("i", $this ->id);
    }
    private function prepararListadoDeSouvenirs(){
        $sql = "SELECT id,nombre,descripcion,stock,precio,fechaDeAlta FROM souvenirs";
        $this -> sentencia = $this -> conexion -> prepare($sql);
    }

    public function listarSouvenir(){
        $this -> prepararListadoDeSouvenirs();
        $this -> sentencia -> execute();
        $resultado = $this -> sentencia -> get_result() -> fetch_all(MYSQLI_ASSOC);
        
        return $resultado;

    }
    public function actualizarSouvenir(){
        $this -> prepararActualizacionDeSouvenir();
        $this -> sentencia -> execute();
    }

    private function prepararActualizacionDeSouvenir(){
        
        $sql = "UPDATE souvenirs SET  nombre = ?, descripcion = ?, stock = ?, precio = ?  WHERE id  = ?";
        $this -> sentencia = $this-> conexion -> prepare($sql);
        $this -> sentencia -> bind_param("ssiii",
            $this -> nombre,
            $this -> descripcion,
            $this -> stock,
            $this -> precio,
            $this -> id
    
        );
    }

}

