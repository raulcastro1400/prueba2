<?php
class PersonalAdminModel {
    private $db;

    public function __construct($pdo) {
        $this->db = $pdo;
    }

    public function getAllPersonal() {
        try {
            $query = "SELECT * FROM personal_administrativo";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            $personal = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $personal;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return [];
        }
    }
}
