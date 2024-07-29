<?php

namespace App\Controllers;

use App\Models\hotelesModel;

class hotelesController extends BaseController
{
    public function hoteles()
    {
        $hoteles = new hotelesModel();
        $datos['datos'] = $hoteles->findAll();
        return view('hoteles', $datos);
    }


    public function nuevoHotel()
    {
        return view('hotel_nuevos');
    }

    public function agregarHotel() 
    {
        $datos = [
            'hotel_id' => $this->request->getVar('txtId'),
            'nombre' => $this->request->getVar('txtNombre'),
            'correoelectronico' => $this->request->getVar('txtCorreo'),
            'telefono' => $this->request->getVar('txtTelefono'),
            'direccion' => $this->request->getVar('txtDireccion'),
            'ciudad_id' => $this->request->getVar('txtCiudadid'),
            'categoria_id' => $this->request->getVar('txtCategoria'),
            'usuario_id' => $this->request->getVar('txtUsuario')
        ];

        $hoteles = new hotelesModel();
        $hoteles->insert($datos);
        return redirect()->route('hoteles');
    }



 

    public function editarHotel($id=null): string
    {
        $hoteles = new hotelesModel();
        $datos['hoteles'] = $hoteles->find($id);
        return view('hoteles_editar', $datos);
    }

    public function actualizarHotel()
    {
        $datos = [
            'nombre' => $this->request->getVar('txtNombre'),
            'correoelectronico' => $this->request->getVar('txtCorreo'),
            'telefono' => $this->request->getVar('txtTelefono'),
            'direccion' => $this->request->getVar('txtDireccion'),
            'ciudad_id' => $this->request->getVar('txtCiudadid'),
            'categoria_id' => $this->request->getVar('txtCategoria'),
            'usuario_id' => $this->request->getVar('txtUsuario')
        ];
    
        $hoteles = new hotelesModel();
        $hoteles->update($this->request->getVar('txtId'), $datos);
        return redirect()->route('hoteles');
    }

    public function eliminarHotel($id=null)
    {
        $hoteles = new hotelesModel();
        $hoteles->delete($id);
        return redirect()->route('hoteles');
    }
}