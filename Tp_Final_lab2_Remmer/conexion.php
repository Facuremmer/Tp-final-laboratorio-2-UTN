<?php
    class BD{

        private static $conexion=NULL;

        public static function crearConexion(){

            if(!isset( self::$conexion)){
                try
                {
                    self::$conexion = mysqli_connect("localhost","root", "", "concesionaria");
                }
                catch(Exception $e){
                    //Guardo el mensaje para el programador
                    guardarError($e->getMessage(), $e->getLine() ,$e->getFile());
                    //Lanzo un mensaje para el usuario
                    throw new DatabaseException("Actualmente es imposible conectarse a la base de datos");
                }
            }
            return self::$conexion;
        }
    }
?>