<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('menu', 'Home::index');

$routes->get('/clientes', 'ClientesController::clientes');
$routes->get('/nuevo_cliente', 'ClientesController::nuevoCliente');
$routes->post('/agregar_cliente', 'ClientesController::agregarCliente');
$routes->get('/editar_cliente/(:num)', 'ClientesController::editarCliente/$1');
$routes->post('/actualizar_cliente', 'ClientesController::actualizarCliente');
$routes->get('/eliminar_cliente/(:num)', 'ClientesController::eliminarCliente/$1');

$routes->get('/hoteles', 'hotelesController::Hoteles');
$routes->get('/nuevo_hotel', 'hotelesController::nuevoHotel');
$routes->post('/agregar_hotel', 'hotelesController::agregarHotel');
$routes->get('/editar_hoteles/(:num)', 'hotelesController::editarHotel/$1');
$routes->post('/actualizar_hotel', 'hotelesController::actualizarHotel');
$routes->get('/eliminar_hotel/(:num)', 'hotelesController::eliminarHotel/$1');



$routes->get('/reservaciones', 'reservacionesController::reservaciones');
$routes->get('/nuevo_reservacion', 'reservacionesController::nuevoreservacion');
$routes->post('/agregar_reservacion', 'reservacionesController::agregarreservacion');
$routes->get('/editar_reservaciones/(:num)', 'reservacionesController::editarreservacion/$1');
$routes->post('/actualizar_reservacion', 'reservacionesController::actualizarreservacion');
$routes->get('/eliminar_reservacion/(:num)', 'reservacionesController::eliminarreservacion/$1');