<?php

namespace App\Models;

use CodeIgniter\Model;

class detalleReservacionesModel extends Model
{
    protected $table = 'detalle_reservaciones';
    protected $primaryKey = 'reservacion_id';
    protected $allowedFields = [
        'reservacion_id',
        'habitacion_id',
        'fecha_ingreso',
        'fecha_salida',  
        'nombre_reservacion'
    ];
}
