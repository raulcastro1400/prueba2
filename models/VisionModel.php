<?php

class VisionModel {
    protected $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function getVision() {
        $query = "SELECT * FROM vision_mision WHERE tipo = 'vision'";
        $statement = $this->pdo->prepare($query);
        $statement->execute();

        return $statement->fetch();
    }

    public function getMision() {
        $query = "SELECT * FROM vision_mision WHERE tipo = 'mision'";
        $statement = $this->pdo->prepare($query);
        $statement->execute();

        return $statement->fetch();
    }

    public function getGalleryImages() {
        $query = "SELECT * FROM galeria_imagenes";
        $statement = $this->pdo->prepare($query);
        $statement->execute();

        return $statement->fetchAll();
    }
}
