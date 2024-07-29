<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vistas hoteles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
    <h1>hoteles</h1>
    <a href='nuevo_hotel' class="btn btn-primary mb-3">Nuevo Hotel</a>
    
    <!-- Formulario de búsqueda -->
    <h3><i class="bi bi-search"></i> barra de busqueda</h3> 
    <input class="form-control mb-3" id="searchInput" type="text" placeholder="Buscar...">
    <div class="table-responsive">
    <table class="table table-border table-striped">
        <thead>
            <tr>
                <th>hotelid</th>
                <th>Nombre</th>
                <th>Correo electronico</th>
                <th>Telefono</th>
                <th>Direccion</th>
                <th>Ciudad id</th>
                <th>Categoria id</th>
                <th>Usuario id</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody id="hoteles">
            <?php foreach($datos as $hoteles): ?>
            <tr>
                <td><?php echo $hoteles['hotel_id']; ?></td>
                <td><?php echo $hoteles['nombre']; ?></td>
                <td><?php echo $hoteles['correoelectronico']; ?></td>
                <td><?php echo $hoteles['telefono']; ?></td>
                <td><?php echo $hoteles['direccion']; ?></td>
                <td><?php echo $hoteles['ciudad_id']; ?></td>
                <td><?php echo $hoteles['categoria_id']; ?></td>
                <td><?php echo $hoteles['usuario_id']; ?></td>
                <td>
                    <a href="editar_hoteles/<?php echo $hoteles['hotel_id']; ?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                    <a href="eliminar_hotel/<?php echo $hoteles['hotel_id']; ?>" class="btn btn-danger"><i class="bi bi-trash"></i>       </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    document.getElementById('searchInput').addEventListener('keyup', function() {
        var searchValue = this.value.toLowerCase();
        var rows = document.querySelectorAll('#hoteles tr');
        
        rows.forEach(function(row) {
            var cells = row.querySelectorAll('td');
            var match = false;
            
            cells.forEach(function(cell) {
                if (cell.textContent.toLowerCase().includes(searchValue)) {
                    match = true;
                }
            });
            
            if (match) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });
</script></body>
</html>
