<?php
    include_once "conexion.php";
    include_once "modelo/automoviles.php";
    require_once "exepciones.php";
    require_once "log.php";

    //Convierto los errores de PHP en excepciones
    set_error_handler('errorHandler');

    class ControladorPaginas{
        public function template(){
            include_once "vista/template.php";
        }

        public function paginaActual(){

            if( isset($_GET['accion']) ){
                
                //Obtengo el valor del boton del menu que se apreto
                $seleccionDelNav = $_GET['accion'];
                
                //Llamo al metodo que tenga el mismo nombre que la accion 
                return $this->$seleccionDelNav();
            }
        }

        private function inicio(){
            //Verifico que todo funcione correctamente sin ninguna excepcion
            try{
                $Autos = Automoviles::ListarAutos();
                return include_once "vista/opciones/inicio.php";
            }
            //Si hay alguna excepcion entra en efecto y muestra el mensaje de error cargado
            catch(DatabaseException $e){
                $error = $e->errorMessage();
                return include_once "vista/error.php";
            }
            //Capturo cualquier otro error
            catch (Exception $e){
                $error = "No hay autos cargados";
                return include_once "vista/error.php";
            }
        }

        private function registrarAuto(){
            //Verifico que los datos se hallan enviado por el metodo POST
            try{
                if(isset($_POST['btn'])){
                    $Marca = $_POST['marca'];
                    $Modelo = $_POST['modelo'];
                    $Año = $_POST['año'];
                    $Precio = $_POST['precio'];
                    $Descripcion = $_POST['descripcion'];
                    validarForm($Marca,$Modelo,$Año,$Precio);
                    
                    Automoviles::registrarAuto($Marca, $Modelo, $Año, $Precio, $Descripcion);
                }
                return include_once "vista/opciones/registrar.php";
            }
            catch(DatabaseException $e){
                $error = $e->errorMessage();
                return include_once "vista/error.php";
                
            }
            catch(FormularioException $form){
                $error = $form->errorMessage();
                return include_once "vista/error.php";
            }
            
            catch(Exception $e){
                $error = "Se produjo un error al intentar registrar";
                return include_once "vista/error.php";
            }
        }

        private function editar(){
            try{
                if(isset($_GET['id'])){
                    $Auto =  Automoviles::buscarAuto($_GET['id']);
                }
    
                if($_POST){
                    print_r($_POST);
                    $Id = $_POST['id'];
                    $Marca = $_POST['marca'];
                    $Modelo = $_POST['modelo'];
                    $Año = $_POST['año'];
                    $Precio = $_POST['precio'];
                    $Descripcion = $_POST['descripcion'];
                    
                    Automoviles::editarAuto($Id, $Marca, $Modelo, $Año,$Precio,$Descripcion);

                    //Vulevo a la pagina de inicio.
                    header("Location:./?accion=inicio");
                }
                return include_once "vista/opciones/editar.php";
            }

            catch(DatabaseException $e){
                $error = $e->errorMessage();
                return include_once "vista/error.php";
            }
            catch(Exception $e){
                $error = "Ocurrio un error al intentar editar";
                return include_once "vista/error.php";
            }
        }

        private function borrar(){
            if(isset($_GET['id'])){
                Automoviles::borrarAuto($_GET['id']);

                header("Location:./?accion=inicio");
            }
            
        }

        private function marcaBuscarAuto(){
            try{
                if(isset($_POST['btnB'])){
                    $Autos =  Automoviles::buscarAutoMarca($_POST['marca']);
                }
                
                return include_once "vista/opciones/inicio.php";
            }
            catch(DatabaseException $e){
                $error = $e->errorMessage();
                return include_once "vista/error.php";
            }
            catch (Exception $e){
                $error = "No hay autos cargados de la marca";
                return include_once "vistas/error.php";
            }
        }
        

        private function idBuscarAuto(){
            try{
                if(isset($_POST['btnC'])){
                    $Autos =  Automoviles::buscarAutoId($_POST['id']);
                }
                return include_once "vista/opciones/inicio.php";
            }
            catch(DatabaseException $e){
                $error = $e->errorMessage();
                return include_once "vista/error.php";
            }
            catch (Exception $e){
                $error = "No hay autos cargados con el Id ingresado";
                return include_once "vistas/error.php";
            }
        }
     
        private function modeloBuscarAuto(){
            try{
                if(isset($_POST['btnD'])){
                    $Autos =  Automoviles::buscarAutoModelo($_POST['modelo']);
                }
                return include_once "vista/opciones/inicio.php";
            }
            catch(DatabaseException $e){
                $error = $e->errorMessage();
                return include_once "vista/error.php";
            }
            catch (Exception $e){
                $error = "No hay autos cargados con el Id ingresado";
                return include_once "vistas/error.php";
            }
        }
     
    }
?>