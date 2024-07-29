<?php 
namespace App\Controllers;
use App\Models\reservacionesModel;
use App\models\detalleReservacionesModel;

class reservacionesController extends BaseController
{
    public function reservaciones()
    {
        $Reservaciones = new reservacionesModel();
        $datos['datos'] = $Reservaciones->findAll();
        return view('reservaciones',$datos);
    }

    public function nuevoReservacion()
    {
        return view('reservaciones_nuevos');
    }

    public function agregarReservacion()
    {
        $datos = [
            'reservacion_id' => $this->request->getVar('txtReservacion'),
            'fecha' => $this->request->getVar('txtFecha'),
            'cliente_id' => $this->request->getVar('txtClienteid'),
            'hotel_id' => $this->request->getVar('txtHotelid'),
            'descripcion' => $this->request->getVar('txtDescrip'),
            'usuario_id' => $this->request->getVar('txtUsuarioid')

        ];
        $Reservaciones = new reservacionesModel();
        $Reservaciones->insert($datos);
        return redirect()->route('reservaciones');
    }

    public function editarreservacion($id = null) 
    {
        $Reservaciones = new reservacionesModel();
        $datos['reservaciones'] = $Reservaciones->find($id);
        return view('reservaciones_editar', $datos);
    }
    

    public function actualizarreservacion()
    {
        $datos = [
            'fecha' => $this->request->getVar('txtFecha'),
            'cliente_id' => $this->request->getVar('txtClienteid'),
            'hotel_id' => $this->request->getVar('txtHotelid'),
            'descripcion' => $this->request->getVar('txtDescrip'),
            'usuario_id' => $this->request->getVar('txtUsuarioid')
        ];
        $Reservaciones = new reservacionesModel();
        $Reservaciones->update($this->request->getVar('txtReservacion'), $datos);
        return redirect()->route('reservaciones');
    }




    public function eliminarreservacion($id=null)
    {
        $Reservaciones = new reservacionesModel();
        $Reservaciones->delete($id);
        return redirect()->route('reservaciones');
    }











}







?>