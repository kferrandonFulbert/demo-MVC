<?php
/**
 * Description of AccueilModel
 *
 * @author Kevin
 * @version 1.0.0
 * 
 */
class AccueilModel {
    private $pdo;
    public function __construct() {
        $this->pdo = new PDO("mysql:dbname=produits;host=localhost","root","");
    }

}
