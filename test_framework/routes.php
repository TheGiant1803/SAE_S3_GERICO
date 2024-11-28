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
        // Démarrer la session si ce n'est pas déjà fait
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if(isset($_SESSION['user_id'])==false){
            Flight::redirect('/connexion.html');
        }
        
        // Préparer les données à passer au template
        $data = [
        // Si l'utilisateur est connecté, passez son nom
        'user_name' => isset($_SESSION['user_name']) ? $_SESSION['user_name'] : null,
        'user_prenom' => isset($_SESSION['user_prenom']) ? $_SESSION['user_prenom'] : null,
        'user_admin' => isset($_SESSION['user_admin']) ? $_SESSION['user_admin'] : null,
        'user_id' => isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null
        ];
        Flight::render('./templates/accueil.tpl', $data);
};



Flight::route('/', 'accueil');

function admin_validation_congés() {
        // Démarrer la session si ce n'est pas déjà fait
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if(isset($_SESSION['user_id'])==false){
            Flight::redirect('/connexion.html');
        }
        
        // Préparer les données à passer au template
        $data = [
        // Si l'utilisateur est connecté, passez son nom
        'user_name' => isset($_SESSION['user_name']) ? $_SESSION['user_name'] : null,
        'user_prenom' => isset($_SESSION['user_prenom']) ? $_SESSION['user_prenom'] : null,
        'user_admin' => isset($_SESSION['user_admin']) ? $_SESSION['user_admin'] : null,
        'user_id' => isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null
        ];
    
    Flight::render('./templates/admin_validation_congés.tpl', $data);
}

// Route associée à la fonction
Flight::route('/admin_validation_congés.html', 'admin_validation_congés');



function admin() {
        // Démarrer la session si ce n'est pas déjà fait
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if(isset($_SESSION['user_id'])==false){
            Flight::redirect('/connexion.html');
        }
        
        // Préparer les données à passer au template
        $data = [
        // Si l'utilisateur est connecté, passez son nom
        'user_name' => isset($_SESSION['user_name']) ? $_SESSION['user_name'] : null,
        'user_prenom' => isset($_SESSION['user_prenom']) ? $_SESSION['user_prenom'] : null,
        'user_admin' => isset($_SESSION['user_admin']) ? $_SESSION['user_admin'] : null,
        'user_id' => isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null
        ];
    Flight::render('./templates/admin.tpl',$data);
}
Flight::route('/admin.html', 'admin');

function Ajout_fiche_paie() {
        // Démarrer la session si ce n'est pas déjà fait
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if(isset($_SESSION['user_id'])==false){
            Flight::redirect('/connexion.html');
        }
        
        // Préparer les données à passer au template
        $data = [
        // Si l'utilisateur est connecté, passez son nom
        'user_name' => isset($_SESSION['user_name']) ? $_SESSION['user_name'] : null,
        'user_prenom' => isset($_SESSION['user_prenom']) ? $_SESSION['user_prenom'] : null,
        'user_admin' => isset($_SESSION['user_admin']) ? $_SESSION['user_admin'] : null,
        'user_id' => isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null
        ];
    Flight::render('./templates/Ajout_fiche_paie.tpl', $data);
}
Flight::route('/Ajout_fiche_paie.html', 'Ajout_fiche_paie');

function conges1() {
        // Démarrer la session si ce n'est pas déjà fait
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if(isset($_SESSION['user_id'])==false){
            Flight::redirect('/connexion.html');
        }
        
        // Préparer les données à passer au template
        $data = [
        // Si l'utilisateur est connecté, passez son nom
        'user_name' => isset($_SESSION['user_name']) ? $_SESSION['user_name'] : null,
        'user_prenom' => isset($_SESSION['user_prenom']) ? $_SESSION['user_prenom'] : null,
        'user_admin' => isset($_SESSION['user_admin']) ? $_SESSION['user_admin'] : null,
        'user_id' => isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null
        ];
    Flight::render('./templates/conges1.tpl', $data);
}
Flight::route('/congé1.html', 'conges1');



Flight::route('GET /connexion.html', function() {
    Flight::render('./templates/connexion.tpl',[]);
});

Flight::route('POST /connexion.html', function(){

     // Démarrer la session si ce n'est pas déjà fait
     if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    // Récupérer les données du formulaire
    $post = Flight::request()->data;
    
    // Initialisation des erreurs
    $errors = [];
    
    // Validation des champs
    if (empty($post->email)) {
        $errors['email'] = "L'email est requis";
    }
    
    if (empty($post->password)) {
        $errors['pwd'] = "Le mot de passe est requis";
    }

    // Si des champs sont vides, réafficher le formulaire
    if (!empty($errors)) {
        Flight::render('./templates/connexion.tpl', [
            'errors' => $errors,
            'post' => $post
        ]);
        return;
    }
    try {
        // Connexion à la base de données
        $pdo = Flight::get('pdo');
        
        // Préparer la requête pour vérifier l'email
        $stmt = $pdo->prepare("SELECT * FROM employe WHERE employe.email = ?");
        $stmt->execute([$post->email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // Vérifier si l'utilisateur existe
        if (!$user) {
            $errors['general'] = "Email ou mot de passe incorrect";
            Flight::render('./templates/connexion.tpl', [
                'errors' => $errors,
                'post' => $post
            ]);
            return;
        }
        
        if (!password_verify($post->password, $user['pwd'])) {
            $errors['general'] = "Email ou mot de passe incorrect";
            Flight::render('./templates/connexion.tpl', [
                'errors' => $errors,
                'post' => $post
            ]);
            return;
        }
        
        // Connexion réussie : ajouter des informations à la session
        $_SESSION['user_name'] = $user['nom'];
        $_SESSION['user_email'] = $user['email'];
        $_SESSION['user_id']=$user['id_emp'];
        $_SESSION['user_prenom']=$user['prenom'];
        $_SESSION['user_admin']=$user['admin'];
        
        // Rediriger vers la page d'accueil
        Flight::redirect('/');
        exit();
        
    } catch (PDOException $e) {
         //Gestion des erreurs de base de données
        $errors['general'] = "Erreur de connexion à la base de données";
        Flight::render('./templates/nouveau_compte.tpl', [
            'errors' => $errors,
            'post' => $post
        ]);
    }


}
);



function Fiche_De_Paie() {
        // Démarrer la session si ce n'est pas déjà fait
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if(isset($_SESSION['user_id'])==false){
            Flight::redirect('/connexion.html');
        }
        
        // Préparer les données à passer au template
        $data = [
        // Si l'utilisateur est connecté, passez son nom
        'user_name' => isset($_SESSION['user_name']) ? $_SESSION['user_name'] : null,
        'user_prenom' => isset($_SESSION['user_prenom']) ? $_SESSION['user_prenom'] : null,
        'user_admin' => isset($_SESSION['user_admin']) ? $_SESSION['user_admin'] : null,
        'user_id' => isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null
        ];
    Flight::render('./templates/Fiche_De_Paie.tpl', $data);
}
Flight::route('/Fiche_De_Paie.html', 'Fiche_De_Paie');

function gestion_cong_date() {
        // Démarrer la session si ce n'est pas déjà fait
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if(isset($_SESSION['user_id'])==false){
            Flight::redirect('/connexion.html');
        }
        
        // Préparer les données à passer au template
        $data = [
        // Si l'utilisateur est connecté, passez son nom
        'user_name' => isset($_SESSION['user_name']) ? $_SESSION['user_name'] : null,
        'user_prenom' => isset($_SESSION['user_prenom']) ? $_SESSION['user_prenom'] : null,
        'user_admin' => isset($_SESSION['user_admin']) ? $_SESSION['user_admin'] : null,
        'user_id' => isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null
        ];
    Flight::render('./templates/gestion_cong_date.tpl', $data);
}
Flight::route('/gestion_cong_date.html', 'gestion_cong_date');


function gestion_des_salaries() {
        // Démarrer la session si ce n'est pas déjà fait
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if(isset($_SESSION['user_id'])==false){
            Flight::redirect('/connexion.html');
        }
        
        // Préparer les données à passer au template
        $data = [
        // Si l'utilisateur est connecté, passez son nom
        'user_name' => isset($_SESSION['user_name']) ? $_SESSION['user_name'] : null,
        'user_prenom' => isset($_SESSION['user_prenom']) ? $_SESSION['user_prenom'] : null,
        'user_admin' => isset($_SESSION['user_admin']) ? $_SESSION['user_admin'] : null,
        'user_id' => isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null
        ];
    // Récupérer l'instance PDO via Flight
    $pdo = Flight::get('pdo');
    
    // Préparer et exécuter la requête SQL
    $stmt = $pdo->query('SELECT nom, prenom, id_emp FROM employe order by id_emp');

    $tab = $stmt->fetchAll(PDO::FETCH_ASSOC);

    Flight::render('./templates/gestion_des_salaries.tpl', ['employes' => $tab]);
}
Flight::route('/gestion_des_salaries.html', 'gestion_des_salaries');

function gestioncongé2() {
        // Démarrer la session si ce n'est pas déjà fait
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if(isset($_SESSION['user_id'])==false){
            Flight::redirect('/connexion.html');
        }
        
        // Préparer les données à passer au template
        $data = [
        // Si l'utilisateur est connecté, passez son nom
        'user_name' => isset($_SESSION['user_name']) ? $_SESSION['user_name'] : null,
        'user_prenom' => isset($_SESSION['user_prenom']) ? $_SESSION['user_prenom'] : null,
        'user_admin' => isset($_SESSION['user_admin']) ? $_SESSION['user_admin'] : null,
        'user_id' => isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null
        ];
    Flight::render('./templates/gestioncongé2.tpl', $data);
}
Flight::route('/gestioncongé2.html', 'gestioncongé2');

function modificationSalarie() {
        // Démarrer la session si ce n'est pas déjà fait
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if(isset($_SESSION['user_id'])==false){
            Flight::redirect('/connexion.html');
        }
        
        // Préparer les données à passer au template
        $data = [
        // Si l'utilisateur est connecté, passez son nom
        'user_name' => isset($_SESSION['user_name']) ? $_SESSION['user_name'] : null,
        'user_prenom' => isset($_SESSION['user_prenom']) ? $_SESSION['user_prenom'] : null,
        'user_admin' => isset($_SESSION['user_admin']) ? $_SESSION['user_admin'] : null,
        'user_id' => isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null
        ];
    Flight::render('./templates/modificationSalarie.tpl', $data);
}
Flight::route('/modificationSalarie.html', 'modificationSalarie');





Flight::route('GET /nouveau_compte.html', function(){
    Flight::render('./templates/nouveau_compte.tpl', []);
});

Flight::route('POST /nouveau_compte.html',function(){

    // Récupérer les données du formulaire que l'utilisateur a écrit
    $post = Flight::request()->data;

    // Initialisation d'un tableau pour les erreurs
    $errors = [];

    // Validation des données
    if (empty($post->matricule)) {
    $errors['matricule'] = "Le matricule est requis";
    }

    if (empty($post->provisoire)) {
        $errors['provisoire'] = "Le mot provisoire est requis";
    } 


    if (empty($post->email)) {
        $errors['email'] = "L'email est requis";
    } elseif (!filter_var($post->email, FILTER_VALIDATE_EMAIL)) { //Teste du format de l'email avec filer_validate_email
        $errors['email'] = "Format d'email invalide";
    }

    if (empty($post->password)) {
        $errors['password'] = "Le mot de passe est requis";
    } elseif (strlen($post->password) < 8) {
        $errors['password'] = "Le mot de passe doit faire au moins 8 caractères";
    } elseif (!preg_match('/[A-Z]/', $post->password)) {  //preg_match sert pour effectuer une recherche de correspondance de motif
        $errors['password'] = "Le mot de passe doit contenir au moins une majuscule";
    } elseif (!preg_match('/[!@#$%^&*(),.?":{}|<>]/', $post->password)) {
        $errors['password'] = "Le mot de passe doit contenir au moins un caractère spécial";
    } elseif (!preg_match('/[0-9]/', $post->password)) {
        $errors['password'] = "Le mot de passe doit contenir au moins un chiffre";
    }

    if (empty($post->confirm_password)) {
        $errors['confirm_password'] = "Veuillez confirmer le mot de passe";
    } elseif ($post->password !== $post->confirm_password) {
        $errors['confirm_password'] = "La confirmation du mot de passe ne correspond pas";
    }
    // Si des erreurs existent
    if (!empty($errors)) {
        // Réafficher le formulaire avec les erreurs et les données précédemment saisies
        Flight::render('./templates/nouveau_compte.tpl', [
            'errors' => $errors,
            'post' => $post
        ]);
        return;
    }
    try {
        $pdo = Flight::get('pdo');
    
        // Vérifier si le matricule existe déjà
        $checkStmt = $pdo->prepare("SELECT COUNT(*) FROM employe WHERE employe.id_emp = ?");
        $checkStmt->execute([$post->matricule]);
        if ($checkStmt->fetchColumn() == 0) {
            $errors['matricule'] = "Ce matricule n'existe pas";
            
            // Réafficher le formulaire avec l'erreur
            Flight::render('./templates/nouveau_compte.tpl', [
                'errors' => $errors,
                'post' => $post
            ]);
            return;
        }       
    
        // Vérifier si l'email existe déjà
        $checkStmt = $pdo->prepare("SELECT COUNT(*) FROM employe WHERE employe.email = ?");
        $checkStmt->execute([$post->email]);
        if ($checkStmt->fetchColumn() == 0) {
            $errors['email'] = "Cet email n'existe pas";
            
            // Réafficher le formulaire avec l'erreur
            Flight::render('./templates/nouveau_compte.tpl', [
                'errors' => $errors,
                'post' => $post
            ]);
            return;
        }
    
        // Vérification du mot de passe provisoire
        $checkStmt = $pdo->prepare("SELECT pwd FROM employe WHERE employe.email = ?");
        $checkStmt->execute([$post->email]);
        if ($checkStmt->fetchColumn() != $post->provisoire) {
            $errors['provisoire'] = "Le mot de passe provisoire ne correspond pas";
    
            Flight::render('./templates/nouveau_compte.tpl', [
                'errors' => $errors,
                'post' => $post
            ]);
            return;
        }
        
        // Hasher le mot de passe
        $hashedPassword = password_hash($post->password, PASSWORD_DEFAULT);
    
        // Préparer la requête de mise à jour
        $stmt = $pdo->prepare("UPDATE employe SET pwd = :hashedPassword WHERE id_emp = :matricule");
        
        // Exécuter la requête avec les paramètres
        if ($stmt->execute([
            'hashedPassword' => $hashedPassword,
            'matricule' => $post->matricule
        ])) {
            // Redirection vers la page de succès
            Flight::redirect('/connexion.html');
            exit();
        } else {
            // Erreur lors de l'insertion
            $errors['general'] = "Erreur lors de l'inscription";
            Flight::render('./templates/nouveau_compte.tpl', [
                'errors' => $errors,
                'post' => $post
            ]);
        }     
    } catch (PDOException $e) {
         //Erreur de base de données
        $errors['general'] = "Erreur de base de données : " . $e->getMessage(); // Ajout pour débogage (à retirer en production)
        Flight::render('./templates/nouveau_compte.tpl', [
            'errors' => $errors,
            'post' => $post
        ]
    );
    }
});




//
// personnalise la page 404
//
Flight::map('notFound', function(){
   echo "<p>404. la route spécifiée n'existe pas</p>";
});

//
//fin du fichier, pas d'autre code que les routes