<?php

require_once 'models/PersonalDocenteModel.php';
require_once 'database/database.php';

class PersonalDocenteController {

    protected $db;
    protected $personalDocenteModel;

    public function __construct() {
        $this->db = new Database();
        $this->personalDocenteModel = new PersonalDocenteModel($this->db->getPdo());
    }

    public function index() {
        $personalDocente = $this->personalDocenteModel->getAllPersonalDocente(); // Corregido el nombre del método
        require_once 'views/personal_docente/index.php';
    }

    // Puedes agregar más métodos según las acciones que necesites

}

