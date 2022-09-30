<?php

namespace app;

class Router
{
    public array $getRoutes = [];
    public array $postRoutes = 
[];
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
$method = $_SERVER['REQUEST_METHOD'];
if ($method === 'GEt')
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

public function renderView($view)
{
    include_once __DIR__. "/views/$view.php";
}


}