<table class="table table-striped table-dark">
    <thead class="font-weight-bold text-center text-warning">
        <tr>
            <th>Id</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Año</th>
            <th>Precio</th>
            <th>Descripcion</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($Autos as $Auto) { ?>
        <tr>
            <td scope="row"><?php echo $Auto->id ?></td>
            <td class="font-weight-bold text-center"><?php echo $Auto->marca ?></td>
            <td class="font-weight-bold text-center"><?php echo $Auto->modelo ?></td>
            <td class="font-weight-bold text-center"><?php echo $Auto->año ?></td>
            <td class="font-weight-bold text-center"><?php echo $Auto->precio ?></td>
            <td class="font-weight-bold text-center"><?php echo $Auto->descripcion ?></td>
            
            <td>
                <div class="btn-group" role="group" aria-label="">
                    <a href="index.php?accion=editar&id=<?php echo $Auto->id ?>" class="btn btn-secondary">Editar</a>
                    <a href="index.php?accion=borrar&id=<?php echo $Auto->id ?>" class="btn btn-danger">Borrar</a>
                </div>
            </td>
        </tr>

        <?php  } ?>
    </tbody>
</table>