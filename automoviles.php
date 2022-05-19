<?php
    
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    
    class Automoviles{
        public $id;
        public $marca;
        public $modelo;
        public $año;
        public $precio;
        public $descripcion;

        public function __construct($Id,$Marca,$Modelo,$Año,$Precio,$Descripcion)
        {
            $this->id = $Id;
            $this->marca = $Marca;
            $this->modelo = $Modelo;
            $this->año = $Año;
            $this->precio = $Precio;
            $this->descripcion = $Descripcion;
        }

        public static function ListarAutos(){
            $listaAutos = [];
            $conexion = BD::crearConexion();
            $consulta = "SELECT * FROM automoviles";
            try{
                $respuesta = mysqli_query($conexion, $consulta);
            }
            catch(Exception $e){
                //Guardo el mensaje para el programador
                guardarError($e->getMessage(), $e->getLine() ,$e->getFile());
                //Lanzo un mensaje para el usuario
                throw new DatabaseException("Aun no hay automoviles cargados en el sistema");
            }

            while ($automovil = $respuesta->fetch_object()) {

                $listaAutos[] = new Automoviles($automovil->id, $automovil->marca, $automovil->modelo, $automovil->año, $automovil->precio, $automovil->descripcion);
            }

            return $listaAutos;
        }

        public static function borrarAuto($id){
            $conexion = BD::crearConexion();
            $query = "DELETE FROM automoviles WHERE id = '$id'";
            $confirmacion = mysqli_query($conexion, $query);

            if(!$confirmacion){
                echo "Hubo un error al eliminar el auto: ".mysqli_error($conexion);
            }
        }

        public static function editarAuto($Id, $Marca, $Modelo, $Año,$Precio,$Descripcion){
            $conexion = BD::crearConexion();
            $query = "UPDATE automoviles SET 
                                marca ='$Marca', 
                                modelo='$Modelo', 
                                año='$Año',
                                precio='$Precio',
                                descripcion='$Descripcion'
                                WHERE id = '$Id'";
            $confirmacion = mysqli_query($conexion, $query);

            if(!$confirmacion){
                echo "Hubo un error al actualizar el auto: ".mysqli_error($conexion);
            }
        }

        public static function buscarAuto($id){
            $conexion = BD::crearConexion();
            $query = "SELECT * FROM automoviles WHERE id = '$id' ";
            try{
                $confirmacion = mysqli_query($conexion, $query);
            }
            catch(Exception $e){
            
                guardarError($e->getMessage(), $e->getLine() ,$e->getFile());
                
                throw new DatabaseException("Automovil no encontrado");
            }

            if (mysqli_num_rows($confirmacion) > 0){
                $automovil = $confirmacion->fetch_object();
                
                return new Automoviles($automovil->id, $automovil->marca, $automovil->modelo, $automovil->año, $automovil->precio, $automovil->descripcion);
            }
            else{
                echo "El ID seleccionado no corresponde a un automovil";
            }
        }

        public static function registrarAuto($Marca, $Modelo, $Año, $Precio, $Descripcion){
            
            $conexion = BD::crearConexion();

            $query = "INSERT INTO automoviles (marca, modelo, año, precio, descripcion) values ('$Marca','$Modelo','$Año', '$Precio','$Descripcion')";
            try{
                $confirmacion = mysqli_query($conexion, $query);
                if($confirmacion){
                    echo "Se guardo correctamente el automovil";
                }
            }
            catch(Exception $e){
                
                guardarError($e->getMessage(), $e->getLine() ,$e->getFile());
               
                throw new DatabaseException("Hubo un error al guardar los datos");
            }
        }

        public static function buscarAutoMarca($marca){
            $listaAutos = [];
            $conexion = BD::crearConexion();
            //Pido los autos que su marca empiece con la letra ingresada.
            $query = "SELECT * FROM automoviles WHERE 
            marca LIKE '".$marca."%'";

            try{
                $confirmacion = mysqli_query($conexion, $query);
            }
            catch(Exception $e){
                
                guardarError($e->getMessage(), $e->getLine() ,$e->getFile());
                
                throw new DatabaseException("Automovil no encontrado");
            }
            if (mysqli_num_rows($confirmacion) > 0){
                while($automovil = $confirmacion->fetch_object()){
                    
                    $listaAutos[] = new Automoviles($automovil->id, $automovil->marca, $automovil->modelo, $automovil->año, $automovil->precio, $automovil->descripcion);
                } 
                
            }
            else{
                echo "La marca ingresada no corresponde a un automovil cargado en el sistema";
            }
            return $listaAutos;
        }

         public static function buscarAutoId($id){
            $listaAutos = [];
            $conexion = BD::crearConexion();
            $query = "SELECT * FROM automoviles WHERE id = '$id' ";
            try{
                $confirmacion = mysqli_query($conexion, $query);
            }
            catch(Exception $e){
                //Guardamos el mensaje para el programador
                guardarError($e->getMessage(), $e->getLine() ,$e->getFile());
                //Lanzamos un mensaje para el usuario
                throw new DatabaseException("Auomovil no encontrado");
            }
            if (mysqli_num_rows($confirmacion) > 0){
                while($automovil = $confirmacion->fetch_object()){
                    
                    $listaAutos[] = new Automoviles($automovil->id, $automovil->marca, $automovil->modelo, $automovil->año, $automovil->precio, $automovil->descripcion);
                } 
                
            }
            else{
                echo "El Id ingreado no corresponde a un automovil cargado en el sistema";
            }
            return $listaAutos;
        } 
        
        public static function buscarAutoModelo ($modelo){
            $listaAutos = [];
            $conexion = BD::crearConexion();
            //Pido los autos que su modelo contenga la letra ingresada.
            $query = "SELECT * FROM automoviles WHERE 
            modelo LIKE '%".$modelo."%'";
            try{
                $confirmacion = mysqli_query($conexion, $query);
            }
            catch(Exception $e){
                
                guardarError($e->getMessage(), $e->getLine() ,$e->getFile());
                
                throw new DatabaseException("Auomovil no encontrado");
            }
            if (mysqli_num_rows($confirmacion) > 0){
                while($automovil = $confirmacion->fetch_object()){
                    
                    $listaAutos[] = new Automoviles($automovil->id, $automovil->marca, $automovil->modelo, $automovil->año, $automovil->precio, $automovil->descripcion);
                } 
                
            }
            else{
                echo "El modelo ingreado no corresponde a un automovil cargado en el sistema";
            }
            return $listaAutos;
        } 

    }
?>