<?php
require_once __DIR__.'/../Models/CategoryModel.php';
/**
 * Description of CategoryController
 *
 * @author Kevin
 */
class CategoryController {
    private $_model;
    /**
     * Instancie notre model
     */
    public function __construct() {
        $this->_model = new CategoryModel();
    }  
    /**
     * Retourne un tableau associatif
     * @return Array
     */
    public function list(){        
        return ["titre" => "Listing des catégories",
            "description" => "Liste des categories",
            "categories"=>$this->_model->list()
        ];
    }
}
