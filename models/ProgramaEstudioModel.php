<?php

class ProgramaEstudioModel {
    protected $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllProgramas() {
        $query = "SELECT * FROM programa_estudio";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProgramaById($id) {
        $query = "SELECT * FROM programa_estudio WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getModulosByProgramaId($programaId) {
        $query = "SELECT * FROM modulo WHERE id_programa_estudio = :programaId";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':programaId', $programaId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getDocentesByProgramaId($programaId) {
        $query = "SELECT * FROM personal_docente WHERE id_programa_estudios = :programa_id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':programa_id', $programaId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


}
