<?php

require_once 'models/ModuloModel.php';
require_once 'database/database.php';

class ModuloController {
    protected $db;
    protected $moduloModel;

    public function __construct() {
        $this->db = new Database();
        $this->moduloModel = new ModuloModel($this->db->getPdo());
    }

    public function show() {
        // Verificar si se proporcionó un ID de módulo en la URL
        if (isset($_GET['moduloId'])) {
            $moduloId = $_GET['moduloId'];
    
            // Obtener los detalles del módulo desde el modelo
            $modulo = $this->moduloModel->getModuloById($moduloId);
            
            // Verificar si se encontró el módulo
            if ($modulo) {
                // Cargar la vista con los detalles del módulo
                require_once 'views/modulo/show.php';
            } else {
                // Redireccionar a una página de error o mostrar un mensaje
                echo "Módulo no encontrado.";
            }
        } else {
            // Redireccionar a una página de error o mostrar un mensaje
            echo "ID de módulo no proporcionado.";
        }
    }

    // Aquí puedes agregar más métodos relacionados con los módulos
}
