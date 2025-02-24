<?php


// $routes = [
//     '/'=> 'controller/index.php',
//     '/about'=> 'controller/about.php',
//     '/contact'=> 'controller/contact.php',
//     '/blogs' => 'controller/posts/index.php',
//     '/blogs/post' => 'controller/posts/post-show.php',
//     '/blogs/create' => 'controller/posts/post-create.php',
//     '/blogs/delete' => 'controller/posts/post-delete.php'
// ];


$router->get('/', 'controller/index.php');
$router->get('/about', 'controller/about.php');
$router->get('/contact', 'controller/contact.php');
$router->get('/blogs', 'controller/posts/index.php');
$router->get('/blogs/post', 'controller/posts/post-show.php');
$router->get('/blogs/create', 'controller/posts/post-create.php');
$router->post('/blogs/store', 'controller/posts/post-store.php');
$router->delete('/blogs/delete', 'controller/posts/post-delete.php');


// function routeToController($uri, $routes)
// {
//     if(array_key_exists($uri, $routes))
//     {
//         require $routes[$uri];
//     }
//     else {
//         http_response_code(404);
//         require('views/404.php');
//     }
    
// }

// routeToController($uri, $routes);

?>