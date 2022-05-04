<?php

class AccueilController {

    public function __construct() {
        
    }

    public function liste() {
        $mvc = ["Models","Views","Controllers", "libs"];
        return ["titre" => "Accueil du site",
            "description" => "Demo mvc en PHP",
            "mvc"=>$mvc
        ];
    }

}
