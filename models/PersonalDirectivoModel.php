<?php 

class PersonalDirectivoModel{
    private $db;

    public function __construct($pdo) {
        $this->db = $pdo;
    }

    public function  getAllPersonal(){
        try{
            $query = "SELECT * FROM personal_directivo";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            $personaldirectivo = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $personaldirectivo;
        }catch(PDOException $e){
            echo "Error:" . $e->getMessage();
            return[];
        }
    }
}
