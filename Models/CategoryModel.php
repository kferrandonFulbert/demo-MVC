<?php

require_once __DIR__ . '/../core/Model.php';

/**
 * Description of AccueilModel
 *
 * @author Kevin
 * @version 1.0.0
 * 
 */
class CategoryModel extends Model {

    public function __construct() {
        parent::__construct();
        $this->_table = "category";
    }

    /*
      avant de factoriser mon code avec l'héritage
      public function list(){
      $sql = "select * from ".$this->table;
      return $this->pdo->query($sql);
      } */

    public function insert(string $unLlibelle) {
        $sth = $this->_pdo->prepare("insert into " . $this->_table .
                " (libelle) values(:libelle)");
        $sth->bindParam(':libelle', $unLlibelle, PDO::PARAM_STR);
        //  $this->_pdo->debugDumpParams();
        return $sth->execute();
    }

    public function delete(int $unId) {
        $sth = $this->_pdo->prepare("delete from " . $this->_table .
                " where id = :id");
        $sth->bindParam(':id', $unId, PDO::PARAM_INT);
        //  $this->_pdo->debugDumpParams();
        return $sth->execute();
    }

    /**
     * Mise a jour de la catégorie
     * @param int $unId
     * @param string $unLibelle
     * @return int
     */
    public function update(int $unId, string $unLibelle) {
        $sth = $this->_pdo->prepare("update " . $this->_table .
                " SET libelle=:libelle where id = :id");
        $sth->bindParam(':id', $unId, PDO::PARAM_INT);
        $sth->bindParam(':libelle', $unLibelle, PDO::PARAM_STR);
        
      // $sth->debugDumpParams();die;
        return $sth->execute();
    }

    public function selectById(int $unId) {
        $sth = $this->_pdo->prepare("select * from " . $this->_table .
                " where id = :id");
        $sth->bindParam(':id', $unId, PDO::PARAM_INT);
        $sth->execute();
        return $sth->fetchAll();
    }

}
