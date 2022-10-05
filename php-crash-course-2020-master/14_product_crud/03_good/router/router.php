<?php

namespace app;

class Router
{
    public array $getRoutes = [];
    public array $postRoutes = [];
    public database $db;
    public function __construct()
    {
$this -> db = new database();
    }
    public function get ($url,$fn)
    {
$this->getRoutes[$url] = $fn;
    }
    public function post ($url,$fn)
    {
        $this->postRoutes[$url] = $fn;
    }
    public function resolve()
    {
$currenturl = $_SERVER['PATH_INFO']??'/';
if (strapos($currenturl, '?')==false) {
 $currenturl= substr($currenturl, 0, strpos($currenturl, '?'));
}
$method = $_SERVER['REQUEST_METHOD'];
if ($method === 'Get')
{
    $fn = $this ->getRoutes[$currenturl] ?? null;
} else {
    $fn = $this -> postRoutes[$currenturl] ?? null; 
}
if ($fn) {
    call_user_func($fn, $this);
} else {
    echo "page not found";
}
    }

public function renderView($view, $params = [])
{
    foreach ($params as $key => $value){
        $$key = $value;
    }
    ob_start();
    include_once __DIR__. "/views/$view.php";
$content = ob_get_clean();
include_once __DIR__. '/views/layouts.php';

}


}