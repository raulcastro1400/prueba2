<?php

// models/UnidadDidacticaModel.php

class UnidadDidacticaModel {
    protected $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllUnidadesDidacticas() {
        $query = "SELECT * FROM unidad_didactica";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUnidadesDidacticasByModulo($moduloId) {
        $query = "SELECT * FROM unidad_didactica WHERE id_modulo = :modulo_id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':modulo_id', $moduloId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}