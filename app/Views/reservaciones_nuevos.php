<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reservaciones</title>
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
        <h1>Reservaciones</h1>
        <form action='agregar_reservacion' method="post">
            <div class="mb-8">
                <label for="txtReservacion" class="form-label">reservacion Id:</label>
                <input type="text" id="txtReservacion" name="txtReservacion" class="form-control" placeholder="Ingrese id del Resvacion">
            </div>
            <div class="mb-8">
                <label for="txtFecha" class="form-label">Fecha:</label>
                <input type="text" id="txtFecha" name="txtFecha" class="form-control" placeholder="Ingrese Fecha">
            </div>
            <div class="mb-8">
                <label for="txtClienteid" class="form-label">cliente id:</label>
                <input type="text" id="txtClienteid" name="txtClienteid" class="form-control" placeholder="Ingrese Cliente id">
            </div>
            <div class="mb-8">
                <label for="txtHotelid" class="form-label">Hotel id:</label>
                <input type="text" id="txtHotelid" name="txtHotelid" class="form-control" placeholder="ingrese Hotel id">
            </div>
            <div class="mb-8">
                <label for="txtDescrip" class="form-label">descripcion:</label>
                <input type="text" id="txtDescrip" name="txtDescrip" class="form-control" placeholder="Ingrese descripcion">
            </div>
            <div class="mb-8">
                <label for="txtUsuarioid" class="form-label">Usuario id:</label>
                <input type="text" id="txtUsuarioid" name="txtUsuarioid" class="form-control" placeholder="Ingrese Usuario id">
            </div>
            <div class="mb-8">
                <input type="submit" value="Guardar" id="btnGuardar" name="btnGuardar">
            </div>
        </form>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>