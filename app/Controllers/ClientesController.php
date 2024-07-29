<?php
namespace App\Controllers;

use App\Models\ClientesModel;

class ClientesController extends BaseController
{
    public function clientes()
    {
        $clientes = new ClientesModel();
        $datos['datos'] = $clientes->findAll();
        return view('clientes', $datos);
    }


    public function nuevoCliente()
    {
        return view('clientes_nuevos');
    }

    public function agregarCliente() 
    {
        $datos = [
            'cliente_id' => $this->request->getVar('txtCliente'),
            'nombre' => $this->request->getVar('txtNombre'),
            'apellido' => $this->request->getVar('txtApellido'),
            'nit' => $this->request->getVar('txtNit'),
            'telefono' => $this->request->getVar('txtTelefono'),
            'correo_electronico' => $this->request->getVar('txtCorreo'),
            'direccion' => $this->request->getVar('txtDireccion'),
            'contrasenia' => $this->request->getVar('txtContrasenia')
        ];

        $clientes = new ClientesModel();
        $clientes->insert($datos);
        return redirect()->route('clientes');
    }

 

    public function editarCliente($id=null): string
    {
        $clientes = new ClientesModel();
        $datos['cliente'] = $clientes->find($id);
        return view('clientes_editar', $datos);
    }

    public function actualizarCliente()
    {
        $datos = [
            'nombre' => $this->request->getVar('txtNombre'),
            'apellido' => $this->request->getVar('txtApellido'),
            'nit' => $this->request->getVar('txtNit'),
            'telefono' => $this->request->getVar('txtTelefono'),
            'correo_electronico' => $this->request->getVar('txtCorreo'),
            'direccion' => $this->request->getVar('txtDireccion'),
            'contrasenia' => $this->request->getVar('txtContrasenia')
        ];
    
        $clientes = new ClientesModel();
        $clientes->update($this->request->getVar('txtCliente'), $datos);
        return redirect()->route('clientes');
    }

    public function eliminarCliente($id=null)
    {
        $clientes = new ClientesModel();
        $clientes->delete($id);
        return redirect()->route('clientes');
    }
}

