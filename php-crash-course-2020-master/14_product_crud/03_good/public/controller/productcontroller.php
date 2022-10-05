<?php

use app\Router;

class productcontroller 
{
    
public function index(Router $router){
    $search = $_GET['search']?? '';
    $products = $router->db->getproducts();
echo $router -> renderView('products/index',[
    'products'=> $products,
    'search' => $search
]);
}
public function create(router $router)
{
    $errors = [];
    $productData = [
        'title' => '',
        'description' => '',
        'image' => '',
        'price' => '',
    ];
    if ($_SERVER['REQUEST_METHOD'] === 'post') {
    $productData['title'] = $_POST['title'];
    $productData['description'] = $_POST['description'];
    $productData['price'] = (float)$_POST['price'];
    $productData['imagefile'] = $_POST['image']?? null;
    
    $product = new Product();
    $product -> load ($productData);
$errors = $product -> save();
if (empty($errors)) {
    header('location: products');
    exit;
    }
}
    $router -> renderView('products/create',[
        'products'=> $productData,
        'errors' => $errors
    ]);
}
public function update(Router $router)
{
    $id = $_GET['id']??null;
    if (!$id) {
        header('location: /products');
        exit;
    }
    $productData = $router -> db - getProductById($id);

    $router->renderview('product/update',[
        'product'=>$productData    ]);
}
public function delete(Router $router)
{
    $id = $post ['id']?? null;
    if (!$id) {
        header('location: /products');
        exit;
    }
    $router->db->deleteproduct($id);
    header('location: /products');
    exit;
}
}