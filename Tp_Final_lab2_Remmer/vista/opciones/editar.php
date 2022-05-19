<div class="card  text-white bg-dark mb-3" color="red">
    <div class="card-header">
      EDITAR AUTOMOVIL
    </div>
    <div class="card-body">
        <form action="" method="POST">
            <div class="mb-3">
              <label for="id" class="form-label">Id: </label>
              <input type="text"
                class="form-control" name="id" id="id" value="<?php if (!empty($Auto)) { echo $Auto -> id ;}?>" readonly id="id" aria-describedby="helpId" >
            </div>
            <div class="mb-3">
              <label for="nombre" class="form-label">Marca: </label>
              <input type="text"
                class="form-control" name="marca" id="marca" value="<?php if (!empty($Auto)) { echo $Auto -> marca; }?>" aria-describedby="helpId" placeholder="Marca">
            </div>
            <div class="mb-3">
              <label for="precio" class="form-label">Modelo: </label>
              <input type="text"
                class="form-control" name="modelo" id="modelo" value="<?php if (!empty($Auto)) { echo $Auto -> modelo;} ?>" aria-describedby="helpId" placeholder="Modelo">
            </div>
            <div class="mb-3">
              <label for="cantidad" class="form-label">Año: </label>
              <input type="text"
                class="form-control" name="año" id="año" value="<?php if (!empty($Auto)) { echo $Auto -> año;} ?>" aria-describedby="helpId" placeholder="Año">
            </div>
            <div class="mb-3">
              <label for="cantidad" class="form-label">Precio: </label>
              <input type="number"
                class="form-control" name="precio" id="precio" value="<?php if (!empty($Auto)) { echo $Auto -> precio;} ?>" aria-describedby="helpId" placeholder="Precio">
            </div>
            <div class="mb-3">
              <label for="descripcion" class="form-label">Descripcion: </label>
              <input type="text"
                class="form-control" name="descripcion" id="descripcion" value="<?php if (!empty($Auto)) {echo $Auto -> descripcion;}?>" aria-describedby="helpId" placeholder="Descripcion">
            </div>
            <input name="" id="" class="btn btn-secondary text-dark" type="submit" value="Editar producto">
            <a href="index.php?accion=inicio" class="btn btn-danger">Cancelar</a>
        </form>
    </div>

</div>