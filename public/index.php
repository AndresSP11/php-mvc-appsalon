<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\LoginController;
use MVC\Router;

$router = new Router();

/* Primero se define la Ruta , luego el metodo , luego la dirección de la vista que tendrá , finalmente entre corchetes la clase que va 
y el metodo de la clase del controlador que va usar  */

$router->get('/',[LoginController::class,'login']);

$router->post('/',[LoginController::class,'login']);
/* Aqui visitarà la pagina */

$router->get('/logout',[LoginController::class,'logout']);

//Recuperar Password//

$router->get('/olvide',[LoginController::class,'olvide']);

$router->post('/olvide',[LoginController::class,'olvide']);

$router->get('/recuperar',[LoginController::class],'recuperar');

$router->post('/recuperar',[LoginController::class],'recuperar');

//Crear cuenta

$router->get('/crear-cuenta',[LoginController::class],'crear');

$router->post('/crear-cuenta',[LoginController::class],'crear');




// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();