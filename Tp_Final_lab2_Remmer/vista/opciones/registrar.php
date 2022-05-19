<div class="row">
          <div class="col">
              <div class="formulario">
                  <form action="" method="POST">
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="marca">Marca</label>
                          <input type="text" class="form-control shadow-lg p-8 mb-8 bg-white rounded" id="marca" placeholder="Ingrese la marca del auto" name="marca" required name="marca" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="modelo">Modelo</label>
                        <input type="text" class="form-control shadow-lg" id="modelo" placeholder="Ingrese el modelo del auto" name="modelo" required name="modelo">
                      </div>
                      <div class="form-group">
                        <label for="año">Año</label>
                        <input type="text" class="form-control shadow-lg" id="año" placeholder="Ingrese el año del auto" name="año" required name="año">
                      </div>
                      <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="text" name="precio" class="form-control shadow-lg" id="precio" placeholder="Ingrese el precio del auto" >
                      </div>
                      <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <input type="text" class="form-control shadow-lg" name="descripcion" id="descripcion" placeholder="Ingrese la descripción del auto"  >
                      </div>
                      <button type="submit" class="btn btn-dark shadow-lg" name="btn">registrar</button>
                      <a href="index.php?accion=inicio" class="btn btn-primary btn-danger text-white">Cancelar</a>
                    </form>
              </div>
          </div>
            <div class="col"><?php if(!empty($error)) {echo $error;}  ?> 
                
            </div>
      </div>