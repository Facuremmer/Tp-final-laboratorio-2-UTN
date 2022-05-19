<?php
    class DatabaseException extends Exception {
            //Mensaje personalizado para el usuario, cuando se produce un error en la BD
            public function errorMessage() {
                $errorMsg = 'Disculpe: '.$this->getMessage();

                return $errorMsg;
            }
        }

    class FormularioException extends Exception {
        //Mensaje personalizado para el usuario, cuando se produce un error en el formulario
        public function errorMessage() {
            $error = "Falta completar: ".$this->getMessage(); 
            
            return $error;
        }
    }

    //Convierto los errores en excepciones
    function errorHandler($error_level,$error_message, $error_file,$error_line) {
        guardarError($error_message, $error_line,$error_file);
        throw new Exception (" ");
    }


    function validarForm($Marca, $Modelo, $Año, $Precio){
        $mensaje = '';

        if(empty($Marca)){
            $mensaje = 'marca';
        }

        if(empty($Modelo)){
            $mensaje.= 'modelo';
        }

        if(empty($Año)){
            $mensaje.= 'año';
        }
        
        if(empty($Precio)){
            $mensaje.= 'precio';
        }
        // Si el mensaje vino vacio ahi lanzo la excepcion.
        if(!empty($mensaje)){

            throw new FormularioException($mensaje);
        }
    }



?>