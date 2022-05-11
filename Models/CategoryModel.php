<?php
require_once __DIR__.'/../core/Model.php';
/**
 * Description of AccueilModel
 *
 * @author Kevin
 * @version 1.0.0
 * 
 */
class CategoryModel  extends Model {
    public function __construct() {
        parent::__construct();
         $this->_table="category";
    }    
 /*   
   avant de factoriser mon code avec l'héritage
    public function list(){
        $sql = "select * from ".$this->table;
        return $this->pdo->query($sql);
    }*/
}
