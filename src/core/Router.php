<?php
namespace App\Core;

class Router
{
    public function run()
    {
        $routes = require __DIR__ . '/../config/routes.php';
        $page = $_GET['page'] ?? 'home';

        if (!isset($routes[$page])) {
            die('404 - Page non trouvée');
        }

        $controllerName = 'App\\Controllers\\' . $routes[$page]['controller'];
        $method = $routes[$page]['method'];

        $controller = new $controllerName();
        $controller->$method();
    }
}
