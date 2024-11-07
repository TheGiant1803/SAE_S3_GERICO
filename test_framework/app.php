<?php
//
//inclure Flight avec le bon chemin
//
require '../includes/core-master/flight/Flight.php';
//
//inclure Smarty avec le bon chemin
//

require '../includes/smarty/libs/Smarty.class.php';

//
//inclure le fichier de routes
//

require 'routes.php';


//
//copier le code de configuration de Flight/Smarty
//
Flight::register('view', 'Smarty', array(), function($smarty){
    $smarty->template_dir = './templates/';
    $smarty->compile_dir = './templates_c/';
    $smarty->config_dir = './config/';
    $smarty->cache_dir = './cache/';
   });
   //ajoute une méthode render à Flight qui affiche un template
   //en lui transmettant un tableau de données
   Flight::map('render', function($template, $data){
    Flight::view()->assign($data);
    Flight::view()->display($template);
   });


//
//copier le code de la fonction render
//

Flight::map('render', function($template, $data){
    Flight::view()->assign($data);
    Flight::view()->display($template);
   }); 

//
//exercice PDO : enregistrer la variable pdo avec Flight::set
//
// Création de l'instance PDO
$pdo = new PDO('mysql:host=localhost;dbname=gerico', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Enregistrer l'instance PDO dans Flight
Flight::set('pdo', $pdo);


//
//démarrer Flight (traite les requêtes et appelle la bonne fonction)
//

Flight::start();