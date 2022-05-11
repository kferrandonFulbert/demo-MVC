<?php

require_once __DIR__ . '/Db.php';

/**
 * Description of Model
 *
 * @author Kevin
 */
class Model {

    protected $_pdo;
    protected $_table;

    /**
     * Instancie l'attribut PDO depuis mon Singleton
     * 
     */
    public function __construct() {
        $this->_pdo = Db::getInstance()->getPdo();
    }
    /**
     * Retourne le jeu d'enregistrement des catégories
     * 
     * @return PDOStatement
     */
    public function list() {
        $sql = "select * from " . $this->_table;
        return $this->_pdo->query($sql);
    }

}
