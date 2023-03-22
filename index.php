<?php
    //importer les ressources
    use App\Controller\UserController;
    include './App/Utils/BddConnect.php';
    include './App/Utils/Fonctions.php';
    include './App/Model/Utilisateur.php';
    include './App/Controller/UserController.php';
    include './App/Controller/RolesController.php';

   

    //Analyse de l'URL avec parse_url() et retourne ses composants
    $url = parse_url($_SERVER['REQUEST_URI']);
    //test soit l'url a une route sinon on renvoi à la racine
    $path = isset($url['path']) ? $url['path'] : '/';
    //instance des controllers
    $userController = new UserController();
    $userRole = new RolesController();
    //routeur
    switch ($path) {
        case '/ProjetPHP/Chocoblast/':
            include './App/Vue/home.php';
            break;

        case '/ProjetPHP/Chocoblast/userAdd':
            //appel de la fonction insertUser
            $userController->insertUser();
            break;

        case '/ProjectPHP/Chocoblast/addRoles':
            $userRole->insertRole();
            break;

        default:
            include './App/Vue/error.php';
            break;
    }
?>