<?php
// controllers/HomeController.php

require_once 'models/VisionModel.php';
require_once 'database/database.php';

class VisionController {

    protected $db;
    protected $VisionModel;

    public function __construct() {
        $this->db = new Database();
        $this->visionModel = new VisionModel($this->db->getPdo());
        
    }

    public function index() {
        
        $vision = $this->visionModel->getVision();
        $mision = $this->visionModel->getMision();
        $galleryImages = $this->visionModel->getGalleryImages();

        require_once 'views/vision/index.php';
    }
}