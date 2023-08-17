<?php
require_once 'models/UnidadDidacticaModel.php';
require_once 'models/ModuloModel.php';
require_once 'database/database.php';

class UnidadDidacticaController {

    protected $db;
    protected $unidadDidacticaModel;
    protected $moduloModel; // Asegúrate de que esta propiedad esté declarada

    public function __construct() {
        $this->db = new Database();
        $this->unidadDidacticaModel = new UnidadDidacticaModel($this->db->getPdo());
        $this->moduloModel = new ModuloModel($this->db->getPdo()); // Inicializa el modelo de módulo
    }

    public function index() {
        // Cargar la vista unidades_didacticas/index.php
        require_once 'views/unidades_didacticas/index.php';
    }


    public function show() {
        // Verificar si se proporcionó un ID de módulo en la URL
        if (isset($_GET['moduloId'])) {
            $moduloId = $_GET['moduloId'];
    
            // Obtener los detalles del módulo desde el modelo
            $modulo = $this->moduloModel->getModuloById($moduloId);
    
            // Obtener las unidades didácticas del módulo
            $unidadesDidacticas = $this->unidadDidacticaModel->getUnidadesDidacticasByModulo($moduloId);
    
            // Verificar si se encontraron unidades didácticas
            if ($unidadesDidacticas) {
                // Cargar la vista con los detalles del módulo y las unidades didácticas
                require_once 'views/unidades_Didacticas/show.php';
            } else {
                // Mostrar un mensaje de unidades didácticas no encontradas
                echo "Unidades didácticas no encontradas.";
            }
        } else {
            // Redireccionar a una página de error o mostrar un mensaje
            echo "ID de módulo no proporcionado.";
        }
    }
    
    
}
