<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="bg-success p-2 text-dark bg-opacity-25">

  <body>
    
<div class="container card" style="width: 40rem;">
    <h1>Actualizar Hotel</h1>
    <form action="<?=base_url('actualizar_hotel'); ?>" method="post">
        <input type="hidden" id="txtId" name="txtId" value="<?php echo $hoteles['hotel_id']; ?>">
        <div class="mb-8">
                <label for="txtNombre" class="form-label">Nombre del hotel:</label>
                <input type="text" id="txtNombre" name="txtNombre" value="<?php echo $hoteles['nombre']; ?>" class="form-control" placeholder="Ingrese nombre del hotel">
            </div>
            <div class="mb-8">
                <label for="txtCorreo" class="form-label">Correo electrónico:</label>
                <input type="text" id="txtCorreo" name="txtCorreo" value="<?php echo $hoteles['correoelectronico']; ?>" class="form-control" placeholder="Ingrese Correo">
            </div>
            <div class="mb-8">
                <label for="txtTelefono" class="form-label">Numero de telefono:</label>
                <input type="text" id="txtTelefono" name="txtTelefono" value="<?php echo $hoteles['telefono']; ?>" class="form-control" placeholder="Ingrese numero de telefono">
            </div>
            <div class="mb-8">
                <label for="txtDireccion" class="form-label">Direccion:</label>
                <input type="text" id="txtDireccion" name="txtDireccion" value="<?php echo $hoteles['direccion']; ?>" class="form-control" placeholder="ingrese direccion">
            </div>
            <div class="mb-8">
                <label for="txtCiudadid" class="form-label">Ciudad:</label>
                <input type="text" id="txtCiudadid" name="txtCiudadid" value="<?php echo $hoteles['ciudad_id']; ?>" class="form-control" placeholder="Ingrese Ciudad">
            </div>
            <div class="mb-8">
                <label for="txtCategoria" class="form-label">Categoria:</label>
                <input type="text" id="txtCategoria" name="txtCategoria" value="<?php echo $hoteles['categoria_id']; ?>" class="form-control" placeholder="Ingrese categoria">
            </div>
            <div class="mb-8">
                <label for="txtUsuario" class="form-label">Usuario Id:</label>
                <input type="text" id="txtUsuario" name="txtUsuario" value="<?php echo $hoteles['usuario_id']; ?>" class="form-control" placeholder="Ingrese usuario id">
            </div>
        <div class="mb-3">
            <input type="submit" value="Actualizar" class="btn btn-primary">
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
