<?php

//
//déclaration des routes ici
//

function demo(){
     // Récupérer l'instance PDO via Flight
     $pdo = Flight::get('pdo');
    
     // Préparer et exécuter la requête SQL
     $stmt = $pdo->query('SELECT nom_emp FROM employe WHERE id_emp = 1');
     
     // Récupérer le nom de l'employé
     $nom = $stmt->fetch(PDO::FETCH_ASSOC); // Utiliser fetch au lieu de fetchAll pour une seule ligne
     
     // Vérifier que le nom a été trouvé
     if ($nom) {
         $tab['nom'] = $nom['nom_emp']; // Accéder directement au champ nom_emp
     } else {
         $tab['nom'] = 'Employé non trouvé';
     }
     
     // Ajouter des données supplémentaires à passer au template
     $tab['test'] = 'test';
     
     // Rendre la vue avec Flight::render
     Flight::render('./templates/accueil.tpl', $tab);
}

function accueil() {
    $tab['test'] = 'test';
    Flight::render('./templates/accueil.tpl', $tab);
}
Flight::route('/', 'accueil');

function admin_validation_congés() {
    $tab['test'] = 'test';
    Flight::render('./templates/admin_validation_congés.tpl', $tab);
}

// Route associée à la fonction
Flight::route('/admin_validation_congés.html', 'admin_validation_congés');



function admin() {
    $tab['test'] = 'test';
    Flight::render('./templates/admin.tpl', $tab);
}
Flight::route('/admin.html', 'admin');

function Ajout_fiche_paie() {
    $tab['test'] = 'test';
    Flight::render('./templates/Ajout_fiche_paie.tpl', $tab);
}
Flight::route('/Ajout_fiche_paie.html', 'Ajout_fiche_paie');

function conges1() {
    $tab['test'] = 'test';
    Flight::render('./templates/conges1.tpl', $tab);
}
Flight::route('/congé1.html', 'conges1');

function connexion() {
    $tab['test'] = 'test';
    Flight::render('./templates/connexion.tpl', $tab);
}
Flight::route('/connexion.html', 'connexion');

function Fiche_De_Paie() {
    $tab['test'] = 'test';
    Flight::render('./templates/Fiche_De_Paie.tpl', $tab);
}
Flight::route('/Fiche_De_Paie.html', 'Fiche_De_Paie');

function gestion_cong_date() {
    $tab['test'] = 'test';
    Flight::render('./templates/gestion_cong_date.tpl', $tab);
}
Flight::route('/gestion_cong_date.html', 'gestion_cong_date');


function gestion_des_salaries() {
    // Récupérer l'instance PDO via Flight
    $pdo = Flight::get('pdo');
    
    // Préparer et exécuter la requête SQL
    $stmt = $pdo->query('SELECT nom_emp, prenom_emp, id_emp FROM employe order by id_emp');

    $tab = $stmt->fetchAll(PDO::FETCH_ASSOC);

    Flight::render('./templates/gestion_des_salaries.tpl', ['employes' => $tab]);
}
Flight::route('/gestion_des_salaries.html', 'gestion_des_salaries');

function gestioncongé2() {
    $tab['test'] = 'test';
    Flight::render('./templates/gestioncongé2.tpl', $tab);
}
Flight::route('/gestioncongé2.html', 'gestioncongé2');

function modificationSalarie() {
    $tab['test'] = 'test';
    Flight::render('./templates/modificationSalarie.tpl', $tab);
}
Flight::route('/modificationSalarie.html', 'modificationSalarie');

function nouveau_compte() {
    $tab['test'] = 'test';
    Flight::render('./templates/nouveau_compte.tpl', $tab);
}
Flight::route('/nouveau_compte.html', 'nouveau_compte');





//
// personnalise la page 404
//
Flight::map('notFound', function(){
   echo "<p>404. la route spécifiée n'existe pas</p>";
});

//
//fin du fichier, pas d'autre code que les routes