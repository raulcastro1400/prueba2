 
<?php
// controllers/HomeController.php

require_once 'models/ProgramaEstudioModel.php';
require_once 'models/PersonalAdminModel.php';
require_once 'database/database.php';

class HomeController {
    protected $db;
    protected $programaEstudioModel;

    public function __construct() {
        $this->db = new Database();
        $this->programaEstudioModel = new ProgramaEstudioModel($this->db->getPdo());
        $this->personalAdminModel = new PersonalAdminModel($this->db->getPdo());
    }

    public function index() {
        // Obtener los programas de estudio
        $programas = $this->programaEstudioModel->getAllProgramas();
        $personal = $this->personalAdminModel->getAllPersonal();

        
        // Cargar la vista home/index.php y pasar los datos
        require_once 'views/home/index.php';
    }
}