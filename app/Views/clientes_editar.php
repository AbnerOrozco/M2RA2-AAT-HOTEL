<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="bg-success p-2 text-dark bg-opacity-25">

  <body>
    
<div class="container card" style="width: 40rem;">
    <h1>Actualizar Cliente</h1>
    <form action="<?php echo base_url("/actualizar_cliente"); ?>" method="post">
        <input type="hidden" id="txtCliente" name="txtCliente" value="<?php echo $cliente['cliente_id']; ?>">
        <div class="mb-8">
                <label for="txtNombre" class="form-label">Nombre del Cliente:</label>
                <input type="text" id="txtNombre" name="txtNombre" value="<?php echo $cliente['nombre']; ?>" class="form-control" placeholder="Ingrese nombre del Cliente">
            </div>
            <div class="mb-8">
                <label for="txtApellido" class="form-label">Nombre del Apellido:</label>
                <input type="text" id="txtApellido" name="txtApellido" value="<?php echo $cliente['apellido']; ?>" class="form-control" placeholder="Ingrese nombre del Apellido">
            </div>
            <div class="mb-8">
                <label for="txtNit" class="form-label">Nit:</label>
                <input type="text" id="txtNit" name="txtNit" value="<?php echo $cliente['nit']; ?>" class="form-control" placeholder="IngrNit">
            </div>
            <div class="mb-8">
                <label for="txtTelefono" class="form-label">Numero de telefono:</label>
                <input type="text" id="txtTelefono" name="txtTelefono" value="<?php echo $cliente['telefono']; ?>" class="form-control" placeholder="Ingrese Correo">
            </div>
            <div class="mb-8">
                <label for="txtCorreo" class="form-label">Correo electrónico:</label>
                <input type="text" id="txtCorreo" name="txtCorreo" value="<?php echo $cliente['correo_electronico']; ?>" class="form-control" placeholder="Ingrese Correo">
            </div>
            <div class="mb-8">
                <label for="txtDireccion" class="form-label">Direcion:</label>
                <input type="text" id="txtDireccion" name="txtDireccion" value="<?php echo $cliente['direccion']; ?>" class="form-control" placeholder="Ingrese Direcion">
            </div>
            <div class="mb-8">
                <label for="txtContrasenia" class="form-label">Contraseña</label>
                <input type="text" id="txtContrasenia" name="txtContrasenia" value="<?php echo $cliente['contrasenia']; ?>" class="form-control" placeholder="Ingrese Contraseña">
            </div>
        <div class="mb-3">
            <input type="submit" value="Actualizar" class="btn btn-primary">
        </div>        
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
