<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//todo gérer le coeur de l'appli en POO
require_once('libs/Smarty.class.php');
$smarty = new Smarty();

$page = isset($_GET['page']) ? $_GET['page'] : 'Accueil';
// Routeur (gestion des routes)
$pages = array('Categorie' => 'CategorieController',
    'Produit' => 'ProduitController',
    'Accueil' => 'AccueilController',
    '' => 'accueil.php'
);
$action = (isset($_GET['action'])) ? $_GET['action'] : 'liste';
/**
 * Exemple d'utilisation index.php?page=accueil&action=liste
 */
if (array_key_exists($page, $pages)) {
    require("Controllers/" . $pages[$page] . ".php");
    $ctrl = new $pages[$page]();
    if (method_exists($ctrl, $action)) {
        $smarty->template_dir = 'Views/templates/';
        $smarty->compile_dir = 'Views/templates_c/';
        $smarty->config_dir = 'Views/configs/';
        $smarty->cache_dir = 'Views/cache/';
        $smarty->assign('tpl', $page . '/' . $action . '.tpl');
        $smarty->assign('vue', $ctrl->{$action}());
        $smarty->display('index.tpl');
    } else {
        //todo: 404
    }
} else {
    //todo:404
}
 