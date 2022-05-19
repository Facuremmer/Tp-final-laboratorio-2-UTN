<nav class="navbar navbar-expand-lg navbar-light bg-dark text-white" >
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand text-white" href="index.php?accion=inicio">Inicio</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="navbar-brand text-white" href="index.php?accion=registrarAuto">Registrar <span class="sr-only">(current)</span></a>
    </ul>
    <form action="index.php?accion=marcaBuscarAuto"  method="POST" class="form-inline my-2 my-lg-0">
      <input   name='marca' class="form-control mr-sm-2" type="search" placeholder="Ingresar marca" aria-label="Search">
      <button name="btnB" class="btn btn-dark"  type="submit">Buscar marca</button>
    </form>
    <form action="index.php?accion=idBuscarAuto"  method="POST" class="form-inline my-2 my-lg-0">
      <input  name='id' class="form-control mr-sm-2" type="search" placeholder="Ingresar Id" aria-label="Search">
      <button name="btnC" class="btn btn-dark"  type="submit">Buscar id</button>
    </form>
    <form action="index.php?accion=modeloBuscarAuto"  method="POST" class="form-inline my-2 my-lg-0">
      <input  name='modelo' class="form-control mr-sm-2" type="search" placeholder="Ingresar modelo" aria-label="Search">
      <button name="btnD" class="btn btn-dark"  type="submit">Buscar modelo</button>
    </form>
  </div>
</nav>