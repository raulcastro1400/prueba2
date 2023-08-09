 
<?php

require_once 'models/PersonalAdminModel.php';
require_once 'database/database.php';

class PersonalAdminController {

    protected $db;
    protected $personalAdminModel;

    public function __construct() {
        $this->db = new Database();
        $this->personalAdminModel = new PersonalAdminModel($this->db->getPdo());
    }

    public function index() {
        $personal = $this->personalAdminModel->getAllPersonal();
        require_once 'views/personal_admin/index.php';
    }
}

