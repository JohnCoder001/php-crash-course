<?php
require_once __DIR__. '/../vendor/autoload.php';

use app\Router;
use app\controller\productcontroller;


$router = new Router();

$router->get('/', [productcontroller::class, 'index'] );
$router->get('/products', [productcontroller::class, 'index'] );
$router->get('/products/create', [productcontroller::class, 'create'] );
$router->post('/products/create',[productcontroller::class, 'create'] );
$router->get('/products/update',[productcontroller::class, 'update'] );
$router->post('/products/update',[productcontroller::class, 'update'] );
$router->post('/products/delete',[productcontroller::class, 'delete'] );
$router->resolve();

