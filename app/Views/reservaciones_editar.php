<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar reservacion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-success p-2 text-dark bg-opacity-25">

<body>
    
<div class="container card" style="width: 40rem;">
    <h1>Actualizar reservacion</h1>
    <form action="<?php echo base_url('actualizar_reservacion'); ?>" method="post">
        <input type="hidden" id="txtReservacion" name="txtReservacion" value="<?php echo $reservaciones['reservacion_id']; ?>">
        <div class="mb-8">
                <label for="txtFecha" class="form-label">Fecha:</label>
                <input type="text" id="txtFecha" name="txtFecha" value="<?php echo $reservaciones['fecha']; ?>" class="form-control" placeholder="Ingrese Fecha">
        </div>
        <div class="mb-8">
                <label for="txtClienteid" class="form-label">Cliente id:</label>
                <input type="text" id="txtClienteid" name="txtClienteid" value="<?php echo $reservaciones['cliente_id']; ?>" class="form-control" placeholder="Ingrese Cliente id">
        </div>
        <div class="mb-8">
                <label for="txtHotelid" class="form-label">Hotel id:</label>
                <input type="text" id="txtHotelid" name="txtHotelid" value="<?php echo $reservaciones['hotel_id']; ?>" class="form-control" placeholder="Ingrese Hotel id">
        </div>
        <div class="mb-8">
                <label for="txtDescrip" class="form-label">Descripción:</label>
                <input type="text" id="txtDescrip" name="txtDescrip" value="<?php echo $reservaciones['descripcion']; ?>" class="form-control" placeholder="Ingrese Descripción">
        </div>
        <div class="mb-8">
                <label for="txtUsuarioid" class="form-label">Usuario id:</label>
                <input type="text" id="txtUsuarioid" name="txtUsuarioid" value="<?php echo $reservaciones['usuario_id']; ?>" class="form-control" placeholder="Ingrese Usuario id">
        </div>

        <div class="mb-3">
                <input type="submit" value="Actualizar" class="btn btn-primary">
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
