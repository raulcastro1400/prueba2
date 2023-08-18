<?php

require_once 'models/ProgramaEstudioModel.php';
require_once 'models/PersonalDocenteModel.php';
require_once 'database/database.php';

class ProgramaEstudioController {

    protected $db;
    protected $programaEstudioModel;

    public function __construct() {
        $this->db = new Database();
        $this->programaEstudioModel = new ProgramaEstudioModel($this->db->getPdo());
    }

    public function index() {
        $programas = $this->programaEstudioModel->getAllProgramas();
        require_once 'views/programas_estudio/index.php';
    }

    public function show($id) {
        // Verificar si se proporcionó un ID válido
        if (!empty($id)) {
            $programaId = $id;
    
            // Obtener los detalles del programa de estudio desde el modelo
            $programa = $this->programaEstudioModel->getProgramaById($programaId);
            $modulos = $this->programaEstudioModel->getModulosByProgramaId($programaId);
            $docentes = $this->programaEstudioModel->getDocentesByProgramaId($programaId);
    
            // Verificar si se encontró el programa
            if ($programa) {
                // Cargar la vista con los detalles del programa
                require_once 'views/programas_estudio/show.php';
            } else {
                // Redireccionar a una página de error o mostrar un mensaje
                echo "Programa de estudio no encontrado.";
            }
        } else {
            // Redireccionar a una página de error o mostrar un mensaje
            echo "ID de programa no proporcionado.";
        }
    }

  /* public function show() {
        // Verificar si se proporcionó un ID de programa en la URL
        if (isset($_GET['id'])) {
            $programaId = $_GET['id'];

            // Obtener los detalles del programa de estudio desde el modelo
            $programa = $this->programaEstudioModel->getProgramaById($programaId);
            $modulos = $this->programaEstudioModel->getModulosByProgramaId($programaId);
            $docentes = $this->programaEstudioModel->getDocentesByProgramaId($programaId);    

            // Verificar si se encontró el programa
            if ($programa) {
                // Cargar la vista con los detalles del programa
                require_once 'views/programas_estudio/show.php';
            } else {
                // Redireccionar a una página de error o mostrar un mensaje
                echo "Programa de estudio no encontrado.";
            }
        } else {
            // Redireccionar a una página de error o mostrar un mensaje
            echo "ID de programa no proporcionado.";
        }
    } */

/*     public function getModulos() {
        if (isset($_GET['id'])) {
            $programaId = $_GET['id'];
            $modulos = $this->programaEstudioModel->getModulosByProgramaId($programaId);

            if ($modulos) {
                require_once 'views/programas_estudio/modulos.php';
            } else {
                // Manejar el caso si no hay módulos para el programa
                echo "No se encontraron módulos para este programa.";
            }
        } else {
            // Manejar el caso si no se proporciona un ID de programa
            echo "ID de programa no proporcionado.";
        }
    } */
    
}
