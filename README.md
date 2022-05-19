# Tp-final-laboratorio-2-UTN.
Consigna:
Crear un Página web para una concesionaria.

Usando el patrón Modelo-Vista-Controlador y la programación orientada a objetos crear una
página web para una concesionaria. Esta página debe permitir registrar, modificar, eliminar y
mostrar diferentes automóviles.

Los datos que se guardan son serán:
➢ id: este será una clave primaria, generada automáticamente por la base de datos. Es
decir que el usuario no cargará este valor.
➢ marca: campo obligatorio que define la marca de un auto. Ejemplo Volkswagen.
➢ modelo: es un campo obligatorio que define el modelo de un auto. Ejemplo Golf.
➢ año: campo obligatorio que define el año en que se fabricó el auto.
➢ precio: campo obligatorio que define el precio actual de un auto.
➢ descripción: campo opcional, en esta se podrá describir el auto. Ejemplo: cuantos
kilometros tiene.

Vistas
Las vistas mínimas con la que debe contar la página web
➔ Vista para registrar un automóvil, en esta registramos los datos del auto, menos el id,
ya que este se debe generar automáticamente en la base de datos.
➔ Vista para mostrar los automóviles, en esta se mostrará todos los datos de los autos
disponibles, incluso el Id.
◆ Contendrá una barra de búsqueda para buscar autos a partir de su marca.
◆ Por cada registro que se muestre contendrá dos botones, uno para eliminar y
otro para editar el registro. Si se selecciona editar debería enviarnos
directamente a la vista de edición con los datos del registro seleccionado
cargados.
➔ Vista para editar un automóvil, en esta se podrán modificar aquellos campos que se
crea que van a cambiar a futuro. Por ejemplo el precio. Además contará con una
barra de búsqueda por id, para que directamente el usuario pueda ingresar el id de
un auto y se carguen los campos que puedan editarse.

El usuario debe poder moverse a través de diferentes vistas con un menú de navegación.
Control de errores.
Esta página debe contar además con control de los errores, para que el usuario vea un
mensaje de error amigable y no tenga demasiada información del error que se produjo,
evitando futuros problemas de seguridad.
