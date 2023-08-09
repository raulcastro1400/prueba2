<?php
// index.php

// Definir la ruta base del sitio (carpeta donde se encuentra index.php)
$basePath = '/prueba2/';

// Autocarga de clases (autoload)
spl_autoload_register(function ($className) {
    $filePath = __DIR__ . '/controllers/' . $className . '.php';
    if (file_exists($filePath)) {
        require_once $filePath;
    }
});

// Obtener la página solicitada (si no se especifica, se toma como página de inicio "home")
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Formar el nombre del controlador y la acción
$controllerName = ucfirst($page) . 'Controller';
$action = 'index';

// Verificar si el controlador existe
if (class_exists($controllerName)) {
    // Crear una instancia del controlador
    $controller = new $controllerName();

    // Verificar si se especificó una acción diferente de "index" y si esa acción existe en el controlador
    if (isset($_GET['action']) && method_exists($controller, $_GET['action'])) {
        $action = $_GET['action'];
    }

    // Ejecutar la acción del controlador
    $controller->$action();
} else {
    // Página no encontrada, redireccionar a la página de inicio por defecto
    header('Location: ' . $basePath . '?page=home');
}
