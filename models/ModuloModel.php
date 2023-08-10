<?php

class ModuloModel {
    protected $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getModuloById($moduloId) {
        $query = "SELECT * FROM modulo WHERE id = :moduloId";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':moduloId', $moduloId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Aquí puedes agregar más métodos relacionados con los módulos
}
