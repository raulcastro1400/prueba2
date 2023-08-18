<?php
/* // index.php

// Definir la ruta base del sitio (carpeta donde se encuentra index.php)
$basePath = '/';  // Cambiado a la raíz del dominio

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
 */


// index.php

// Definir la ruta base del sitio (carpeta donde se encuentra index.php)
$basePath = '/';  // Cambiado a la raíz del dominio

// Autocarga de clases (autoload)
spl_autoload_register(function ($className) {
    $filePath = __DIR__ . '/controllers/' . $className . '.php';
    if (file_exists($filePath)) {
        require_once $filePath;
    }
});

// Obtener la URL solicitada y dividir en partes
$url = isset($_GET['url']) ? $_GET['url'] : 'home';
$urlParts = explode('/', $url);

// Formar el nombre del controlador y la acción
$controllerName = ucfirst($urlParts[0]) . 'Controller';
$action = isset($urlParts[1]) ? $urlParts[1] : 'index';

// Obtener el ID si está presente en la URL
$id = isset($urlParts[2]) ? $urlParts[2] : null;

// Verificar si el controlador existe y llamar a la acción correspondiente
if (class_exists($controllerName)) {
    $controller = new $controllerName();

    if (method_exists($controller, $action)) {
        $controller->$action($id);
    } else {
        // Acción no válida, mostrar un mensaje de error
        echo "Acción no válida.";
    }
} else {
    // Página no encontrada, redireccionar a la página de inicio por defecto
    header('Location: ' . $basePath . 'home');
}
?>
