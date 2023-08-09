<?php

class PersonalDocenteModel {
    protected $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllPersonalDocente() {
        try {
            $query = "SELECT personal_docente.*, programa_estudio.nombre AS nombre_programa FROM personal_docente
                      LEFT JOIN programa_estudio ON personal_docente.id = programa_estudio.id";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Manejo de error
            echo "Error: " . $e->getMessage();
            return [];
        }
    }

    
}