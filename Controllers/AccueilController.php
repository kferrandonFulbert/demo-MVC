<?php
/**
 * Class d'un controlleur très simple.
 */
class AccueilController {

    /**
     * Rien pour le moment
     */
    public function __construct() {
        
    }

    /**
     * On retourne un tableau associative à la vue.
     * @return Array
     */
    public function liste() {
        $mvc = ["Models","Views","Controllers", "libs"];
        return ["titre" => "Accueil du site",
            "description" => "Demo mvc en PHP",
            "mvc"=>$mvc
        ];
    }

}
