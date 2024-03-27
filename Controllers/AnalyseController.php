<?php
/**
 * Class d'un controlleur très simple.
 */
class AnalyseController {

    /**
     * Rien pour le moment
     */
    public function __construct() {
        
    }

    public function check(){
        $site = filter_input(INPUT_POST, "site", FILTER_SANITIZE_URL);
        if(!$site){
            header("location: ./");
        }
$html = file_get_contents($site);
$title = $this->getTitle($html);
$description = $this->getDescription($html);
$Hx = $this->getHx($html);
        return [
            "titre" => "Audit référencement de site web",
            "description" => "Seo café audit votre site web, simplement et compréhensible par tous.",
            "site"=>$site,
            "title"=>$title,
            "meta_desc"=>$description,
            "Hx"=>$Hx
        ];
    }

    private function getHx(string $html){
        $header=[];
        for ($i = 1; $i <= 6; $i++) {
            preg_match_all("/<h$i>(.*)<\/h$i>/i", $html, $matches);
            array_push($header,$matches[1]);    
        }
        return $header;
    }
    
    private function getTitle(string $html): string{
        preg_match("/<title>(.*)<\/title>/i", $html, $title_matches);
        $title = $title_matches[1];
        return $title;
    }

    private function getDescription(string $html){
        preg_match("/<meta.*name=\"description\".*content=\"(.*)\".*>/i", $html, $meta_matches);
        $meta_description = $meta_matches[1];
        return $meta_description;
    }

    /**
     * On retourne un tableau associative à la vue.
     * @return Array
     */
    public function list() {
        $mvc = ["Models","Views","Controllers", "libs"];
        return ["titre" => "Audit référencement de site web",
            "description" => "Seo café audit votre site web, simplement et compréhensible par tous.",
            "mvc"=>$mvc
        ];
    }

}
