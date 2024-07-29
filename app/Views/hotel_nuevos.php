<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body class="bg-info p-2 text-dark bg-opacity-10">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href='menu'>Menú Principal</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="clientes">clientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="hoteles">Hoteles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="reservaciones">Reservaciones</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
    <div class="container">
        <h1>Hotel</h1>
        <form action="agregar_hotel" method="post">
            <div class="mb-8">
                <label for="txtId" class="form-label">Hotel Id:</label>
                <input type="text" id="txtId" name="txtId" class="form-control" placeholder="Ingrese id del hotel">
            </div>
            <div class="mb-8">
                <label for="txtNombre" class="form-label">Nombre del hote:</label>
                <input type="text" id="txtNombre" name="txtNombre" class="form-control" placeholder="Ingrese nombre del hotel">
            </div>
            <div class="mb-8">
                <label for="txtCorreo" class="form-label">Correo electrónico:</label>
                <input type="text" id="txtCorreo" name="txtCorreo" class="form-control" placeholder="Ingrese Correo">
            </div>
            <div class="mb-8">
                <label for="txtTelefono" class="form-label">Numero de telefono:</label>
                <input type="text" id="txtTelefono" name="txtTelefono" class="form-control" placeholder="Ingrese Correo">
            </div>
            <div class="mb-8">
                <label for="txtDireccion" class="form-label">Direcion:</label>
                <input type="text" id="txtDireccion" name="txtDireccion" class="form-control" placeholder="Ingrese Direcion">
            </div>
            <div class="mb-8">
                <label for="txtCiudadid" class="form-label">ciudad id</label>
                <input type="text" id="txtCiudadid" name="txtCiudadid" class="form-control" placeholder="Ingrese Ciudad id">
            </div>
            <div class="mb-8">
                <label for="txtCategoria" class="form-label">Categoria:</label>
                <input type="text" id="txtCategoria" name="txtCategoria" class="form-control" placeholder="Ingrese Categoria">
            </div>
            <div class="mb-8">
                <label for="txtUsuario" class="form-label">Usuario:</label>
                <input type="text" id="txtUsuario" name="txtUsuario" class="form-control" placeholder="Ingrese Usuario">
            </div>
            
            <div class="mb-8">
                <input type="submit" value="Guardar" id="btnGuardar" name="btnGuardar">
            </div>
        </form>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>