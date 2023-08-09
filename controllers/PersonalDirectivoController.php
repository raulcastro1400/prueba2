<?php

require_once 'models/PersonalDirectivoModel.php';
require_once 'database/database.php';

class PersonalDirectivoController{

    protected $db;
    protected $personalDirectivoModel;

    public function __construct() {

        $this->db = new Database();
        $this->personalDirectivoModel = new PersonalDirectivoModel($this->db->getPdo());
      
    }

    public function index(){
        $personaldirectivo = $this-> personalDirectivoModel->getAllPersonal();
        require_once 'views/personal_directivo/index.php';
    }
}