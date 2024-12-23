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

function admin_validation_congés_valid(){
    $pdo = Flight::get('pdo');
    $post = Flight::request()->data;
    // Récupérer l'identifiant de la demande
    $id_dcp = $post->id_dcp;

    // Construire dynamiquement le nom du paramètre du statut
    $statut_key = "demande{$id_dcp}";

    // Vérifier si le paramètre existe
    if ($post->$statut_key == "accepte") {
        $action = 1;
    }
    elseif($post->$statut_key == "refuse")
    {
        $action = 0;
    }
    else
    {
        $action = NULL;
    }
    $stmt = $pdo->prepare('UPDATE demande_cp SET valid = :valid WHERE id_dcp = :id_dcp');
    $stmt->execute([':valid'=>$action, ':id_dcp'=>$id_dcp]);

    Flight::redirect("/admin_validation_congés.html?page=$post->page");

}

function admin_validation_congés_aff() {
    // Démarrer la session si ce n'est pas déjà fait
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Vérifier si l'utilisateur est connecté
    if (isset($_SESSION['user_id']) == false) {
        Flight::redirect('/connexion.html');
    }

    // Connexion à la base de données via Flight::get('pdo')
    $pdo = Flight::get('pdo');


    // Pagination
    $limit = 5; // Nombre de congés par page
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $offset = ($page - 1) * $limit;

    // Récupérer les données des congés
    $stmt = $pdo->prepare('
        SELECT d.id_dcp, e.nom, e.prenom, d.motif, d.duree, d.valid 
        FROM demande_cp d 
        JOIN employe e ON d.id_emp = e.id_emp 
        ORDER BY d.date_dcp DESC 
        LIMIT :limit OFFSET :offset
    ');
    $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
    $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();
    $conges = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Récupérer le nombre total de congés pour la pagination
    $stmt = $pdo->query('SELECT COUNT(id_dcp) FROM demande_cp');
    $total_conges = $stmt->fetchColumn();
    $total_pages = ceil($total_conges / $limit);

    // Ajouter les données à passer au template
    $data = [
        'user_name' => $_SESSION['user_name'] ?? null,
        'user_prenom' => $_SESSION['user_prenom'] ?? null,
        'user_admin' => $_SESSION['user_admin'] ?? null,
        'user_id' => $_SESSION['user_id'] ?? null,
        'conges' => $conges,
        'page' => $page,
        'total_pages' => $total_pages
    ];

    // Rendre le template
    if($_SESSION['user_admin']==1){
        Flight::render('./templates/admin_validation_congés.tpl', $data);
    }
    else{Flight::redirect('/');}
}
Flight::route('GET /admin_validation_congés.html', 'admin_validation_congés_aff');

Flight::route('POST /admin_validation_congés.html', 'admin_validation_congés_valid');



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
    if($_SESSION['user_admin']==1)
    {Flight::render('./templates/admin.tpl',$data);}
    else{Flight::redirect('/');}
    
}
Flight::route('/admin.html', 'admin');

function Ajout_fiche_paie_aff() {
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
    if($_SESSION['user_admin']==1)
    {Flight::render('./templates/Ajout_fiche_paie.tpl', $data);}
    else{Flight::redirect('/');}
    
}

function Ajout_fiche_paie_aj() {
    $pdo = Flight::get('pdo');

    // Récupérer les données du formulaire
    $date_fp = $_POST['date_fp'];
    $id_emp = $_POST['id_emp'];

    // Vérifier si le fichier a bien été uploadé
    if (isset($_FILES['fp']) && $_FILES['fp']['error'] === UPLOAD_ERR_OK) {
        // Lire le contenu du fichier
        $fileTmpPath = $_FILES['fp']['tmp_name'];
        $fileData = file_get_contents($fileTmpPath); // Convertir le fichier en données binaires

        // Préparer et exécuter la requête SQL
        $stmt = $pdo->prepare("INSERT INTO fiche_paie(date_fp, fp, id_emp) VALUES (:date_fp, :fp, :id_emp)");
        $stmt->execute([
            ':date_fp' => $date_fp,
            ':fp' => $fileData, // Sauvegarder les données binaires
            ':id_emp' => $id_emp
        ]);

        // Redirection après succès
        Flight::redirect('/Ajout_fiche_paie.html');
    } else {
        // Gestion des erreurs
        Flight::halt(400, 'Erreur lors du téléchargement du fichier');
    }
}


Flight::route('GET /Ajout_fiche_paie.html', 'Ajout_fiche_paie_aff');

Flight::route('POST /Ajout_fiche_paie.html', 'Ajout_fiche_paie_aj');

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
        
        // Préparer la requête pour vérifier l'email et le matricule
        $stmt = $pdo->prepare("SELECT * FROM employe WHERE employe.email=? or employe.id_emp=?");
        $stmt->execute([$post->email,$post->email]);
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
        Flight::render('./templates/connexion.tpl', [
            'errors' => $errors,
            'post' => $post
        ]);
    }


}
);


function cookies(){
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

    Flight::render('./templates/cookies.tpl', $data);
}
Flight::route('GET /cookies.html', 'cookies');

function mentions(){
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
    
        Flight::render('./templates/mentions.tpl', $data);
    }
    Flight::route('GET /mentions.html', 'mentions');

function politique(){
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

    Flight::render('./templates/politique_rgpd.tpl', $data);
}
Flight::route('GET /politique_rgpd.html', 'politique');




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

        $pdo = Flight::get('pdo');

        //kaka
        // Pagination
        $limit = 5; // Nombre de fiche de paie par page
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $offset = ($page - 1) * $limit;

        $stmt = $pdo->prepare('
                                SELECT DATE_FORMAT(date_fp, "%e/%c/%Y") as date_fiche, id_emp, id_fp, DATE_FORMAT(date_fp, "%c/%y") as periode
                                FROM fiche_paie WHERE id_emp = :matricule ORDER BY date_fp DESC 
                                LIMIT :limit OFFSET :offset'
                            );
        $stmt->bindValue(':matricule', $_SESSION['user_id'], PDO::PARAM_INT);
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);

        $stmt->execute();
        $fiche_paie = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $stmt = $pdo->prepare('SELECT COUNT(id_fp) FROM fiche_paie WHERE id_emp = :matricule');
        $stmt->bindValue(':matricule', $_SESSION['user_id'], PDO::PARAM_INT);
        $stmt->execute();
        $total_fp = $stmt->fetchColumn();
        $total_pages = ceil($total_fp / $limit);
        if($page > $total_pages)
        {
            $page = 1;
        }

        $data['page'] = $page;
        $data['total_pages'] = $total_pages;
        $data['fiche_paie'] = $fiche_paie;

    Flight::render('./templates/Fiche_De_Paie.tpl', $data);
}
Flight::route('GET /Fiche_De_Paie.html', 'Fiche_De_Paie');


function aff_fiche_paie(){

    $pdo = Flight::get('pdo');

    $post = Flight::request()->data;

    $idToFetch = $post->id_fiche;

    // Prepare the SQL statement to select the PDF data
    $stmt = $pdo->prepare("SELECT fp FROM fiche_paie WHERE id_fp = :id");
    $stmt->execute(array(':id' => $idToFetch));

    // Fetch the result
    $pdfData = $stmt->fetchColumn();

    if ($pdfData) {
        // Set headers to display PDF in the browser
        header('Content-Type: application/pdf');
        header('Content-Disposition: inline; filename="fiche_paie.pdf"');
        header('Content-Length: ' . strlen($pdfData));
        
        // Output the PDF data
        echo $pdfData;
    } else {
        echo "Pas de pdf trouvé pour cette fiche";
    }
}
Flight::route('POST /Fiche_De_Paie.html', 'aff_fiche_paie');


function gestion_cong_date_aff() {
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

function gestion_cong_date_ajout()
{

    // Démarrer la session si ce n'est pas déjà fait
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if(isset($_SESSION['user_id'])==false){
        Flight::redirect('/connexion.html');
    }
    

         $pdo = Flight::get('pdo');

        $post = Flight::request()->data;
        //Récupération des données envoyées dans une variable
        $date = $post->date_cong;
        $mom_deb = $post->start;
        $motif = $post->motif;
        $nombre_jour = $post->nb_jour;
        $id = $_SESSION['user_id'];

        if($mom_deb == 'matin')
        {
            $heure_deb = 0;
        }
        elseif($mom_deb == 'après_midi')
        {
            $heure_deb = 12;
        }

        $nbcong = $pdo->query("select cong from employe where id_emp = $id")->fetchColumn();
        if($nombre_jour <= $nbcong)
        {
            $sql_conge = "INSERT INTO demande_cp(date_dcp,duree,valid,motif,heure_deb,id_emp) VALUES('$date',$nombre_jour,NULL,'$motif',$heure_deb,$id);";
            //Préaparation de la requête d'insertion
            $i_conge = $pdo->prepare($sql_conge);
            $i_conge->execute();

            $conge = $nbcong - $nombre_jour;
            $sql_conge_minus = "UPDATE employe SET cong = $conge where id_emp = $id";
            $i_conge_minus = $pdo->prepare($sql_conge_minus);
            $i_conge_minus->execute();
        }
        
        
        Flight::redirect('./gestion_cong_date.html');
}
Flight::route('GET /gestion_cong_date.html', 'gestion_cong_date_aff');
Flight::route('POST /gestion_cong_date.html', 'gestion_cong_date_ajout');




function gestion_des_salaries() {
    // Démarrer la session si ce n'est pas déjà fait
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Redirection vers la page de connexion si l'utilisateur n'est pas connecté
    if (!isset($_SESSION['user_id'])) {
        Flight::redirect('/connexion.html');
        return;
    }

    // Récupérer les informations utilisateur pour les passer au template
    $data = [
        'user_name' => $_SESSION['user_name'] ?? null,
        'user_prenom' => $_SESSION['user_prenom'] ?? null,
        'user_admin' => $_SESSION['user_admin'] ?? null,
        'user_id' => $_SESSION['user_id'] ?? null
    ];

    // Connexion à la base de données via Flight
    $pdo = Flight::get('pdo');

    // Nombre d'employés par page
    $limit = 5;

    // Récupérer la page actuelle à partir du paramètre 'page' dans l'URL (défaut à 1)
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $offset = ($page - 1) * $limit;

    try {
        // Récupérer les employés de la table 'employe' avec pagination, triés par ID
        $stmt = $pdo->prepare('SELECT id_emp, nom, prenom FROM employe ORDER BY id_emp ASC LIMIT :limit OFFSET :offset');
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();
        $employes = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Récupérer le nombre total d'employés pour calculer le nombre total de pages
        $stmt = $pdo->query('SELECT COUNT(id_emp) FROM employe');
        $total_employes = $stmt->fetchColumn();
        $total_pages = ceil($total_employes / $limit);

        // Ajouter les données à passer au template
        $data['employes'] = $employes;
        $data['page'] = $page;
        $data['total_pages'] = $total_pages;
    } catch (PDOException $e) {
        // Gestion des erreurs de base de données
        $data['employes'] = [];
        $data['error'] = 'Erreur lors de la récupération des données : ' . $e->getMessage();
    }

    // Passer les données au template
    if($_SESSION['user_admin']==1){Flight::render('./templates/gestion_des_salaries.tpl', $data);}
    else{Flight::redirect('/');}
    
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

    // Connexion à la base de données via Flight
    $pdo = Flight::get('pdo');

    $limit = 5;
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $offset = ($page - 1) * $limit;

    $stmt = $pdo->prepare("SELECT * FROM demande_cp WHERE id_emp = :matricule LIMIT :limit OFFSET :offset");
    $stmt->bindValue(':matricule', $_SESSION['user_id'], PDO::PARAM_INT);
    $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();
    $demande_cp = $stmt->fetchAll(PDO::FETCH_ASSOC);


    $stmt = $pdo->prepare("SELECT COUNT(*) FROM demande_cp WHERE id_emp = :matricule");
    $stmt->execute([':matricule' => $_SESSION['user_id']]);
    $total_demandes = $stmt->fetchColumn();
    $total_pages = ceil($total_demandes / $limit);


    function calculerDateFin($dateDebut, $duree, $heure_deb) {
        $date = new DateTime($dateDebut);
        $joursAjoutes = 0;
        if ($heure_deb >= 12) {$duree--;}
        while ($joursAjoutes < ($duree / 2)) {
            // Ajouter un jour
            $date->modify('+1 day');
    
            // Vérifier si c'est un week-end (6 = samedi, 7 = dimanche)
            $jourSemaine = $date->format('N');
            if ($jourSemaine < 6) {
                $joursAjoutes++;
            }
        }
    
        return $date->format('Y-m-d');
    }
    
    // Ajouter date_fin à chaque demande
    foreach ($demande_cp as &$demande) {
        if (!empty($demande['date_dcp']) && !empty($demande['duree'])) {
            $demande['date_retour'] = calculerDateFin($demande['date_dcp'], $demande['duree'], $demande['heure_deb']);
        } else {
            $demande['date_retour'] = 'Non défini'; // Par défaut si date_dcp ou durée sont manquantes
        }
    }

    $data['demande_cp'] = $demande_cp;
    $data['page'] = $page;
    $data['total_pages'] = $total_pages;

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
    if($_SESSION['user_admin']==1){
        Flight::render('./templates/modificationSalarie.tpl', $data);
    }
    else{Flight::redirect('/');}
    
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


Flight::route('GET /mot_de_passe.html', function(){
    Flight::render('./templates/mot_de_passe.tpl', []);
});

Flight::route('POST /mot_de_passe.html',function(){
    // Démarrer la session si ce n'est pas déjà fait
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    
    // Récupérer les données du formulaire que l'utilisateur a écrit
    $post = Flight::request()->data;
    // Initialisation d'un tableau pour les erreurs
    $errors = [];

    if (empty($post->email)) {
        $errors['email'] = "L'email est requis";
    } elseif (!filter_var($post->email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Format d'email invalide";
    }

    // Si des erreurs existent
    if (!empty($errors)) {
        // Réafficher le formulaire avec les erreurs et les données précédemment saisies
        Flight::render('./templates/mot_de_passe.tpl', [
            'errors' => $errors,
            'post' => $post
        ]);
        return;
    }

    try{
        $pdo = Flight::get('pdo');

        // Vérifier si l'email existe déjà
        $checkStmt = $pdo->prepare("SELECT COUNT(*) FROM employe WHERE employe.email = ?");
        $checkStmt->execute([$post->email]);
        if ($checkStmt->fetchColumn() == 0) {
            $errors['email'] = "Cet email n'existe pas";
            
            // Réafficher le formulaire avec l'erreur
            Flight::render('./templates/mot_de_passe.tpl', [
                'errors' => $errors,
                'post' => $post
            ]);
            return;
        }
     // Préparer l'email
     $to = $post->email;
     $subject = "Réinitialisation de votre mot de passe";
     $message = "
         Bonjour, 

         Vous avez demandé à réinitialiser votre mot de passe. 
         Cliquez sur le lien ci-dessous pour le faire :
         
         http://localhost/SAE_S3_GERICO/test_framework/nouveau_mot_de_passe.html

         Si vous n'êtes pas à l'origine de cette demande, veuillez ignorer cet email.

         Cordialement,
         Le support.
     ";
     $headers = [
         'From' => 'no-reply@gerico.fr',
         'Reply-To' => 'support@gerico.fr',
         'Content-Type' => 'text/plain; charset=UTF-8',
     ];

     // Envoyer l'email
     $success = mail($to, $subject, $message, implode("\r\n", $headers));

     if ($success) {
         // Afficher une page de confirmation
         Flight::render('./templates/confirmation_mail.tpl', [
             'message' => "Un email a été envoyé à votre adresse pour réinitialiser votre mot de passe."
         ]);
     } else {
         $errors['general'] = "Erreur lors de l'envoi de l'email. Veuillez réessayer.";
         Flight::render('./templates/mot_de_passe.tpl', [
             'errors' => $errors,
             'post' => $post
         ]);
     }

    }catch (PDOException $e) {
        //Erreur de base de données
       $errors['general'] = "Erreur de base de données : " . $e->getMessage(); // Ajout pour débogage (à retirer en production)
       Flight::render('./templates/nouveau_compte.tpl', [
           'errors' => $errors,
           'post' => $post
       ]
   );
   }
});
Flight::route('/mot_de_passe.html', 'mot_de_passe');

Flight::route('GET /nouveau_mot_de_passe.html', function(){
    Flight::render('./templates/nouveau_mot_de_passe.tpl', []);
});

Flight::route('POST /nouveau_mot_de_passe.html',function(){
    // Démarrer la session si ce n'est pas déjà fait
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    
    // Récupérer les données du formulaire que l'utilisateur a écrit
    $post = Flight::request()->data;
    // Initialisation d'un tableau pour les erreurs
    $errors = [];

    if (empty($post->email)) {
        $errors['email'] = "L'email est requis";
    } elseif (!filter_var($post->email, FILTER_VALIDATE_EMAIL)) {
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
        Flight::render('./templates/mot_de_passe.tpl', [
            'errors' => $errors,
            'post' => $post
        ]);
        return;
    }

    try{
        $pdo = Flight::get('pdo');

        // Vérifier si l'email existe déjà
        $checkStmt = $pdo->prepare("SELECT COUNT(*) FROM employe WHERE employe.email = ?");
        $checkStmt->execute([$post->email]);
        if ($checkStmt->fetchColumn() == 0) {
            $errors['email'] = "Cet email n'existe pas";
            
            // Réafficher le formulaire avec l'erreur
            Flight::render('./templates/nouveau_mot_de_passe.tpl', [
                'errors' => $errors,
                'post' => $post
            ]);
            return;
        }

        // Hasher le mot de passe
        $hashedPassword = password_hash($post->password, PASSWORD_DEFAULT);
    
        // Préparer la requête de mise à jour
        $stmt = $pdo->prepare("UPDATE employe SET pwd = :hashedPassword WHERE email = :email");
        
        // Exécuter la requête avec les paramètres
        if ($stmt->execute([
            'hashedPassword' => $hashedPassword,
            'email' => $post->email
        ])) {
            // Redirection vers la page de succès
            Flight::redirect('/connexion.html');
            exit();
        } else {
            // Erreur lors de l'insertion
            $errors['general'] = "Erreur lors du changement de mot de passe";
            Flight::render('./templates/nouveau_mot_de_passe.tpl', [
                'errors' => $errors,
                'post' => $post
            ]);
        }     
    }catch (PDOException $e) {
        //Erreur de base de données
       $errors['general'] = "Erreur de base de données : " . $e->getMessage(); // Ajout pour débogage (à retirer en production)
       Flight::render('./templates/nouveau_mot_de_passe.tpl', [
           'errors' => $errors,
           'post' => $post
       ]
   );
   }
});


Flight::route('GET /logout', function() {
    // Démarrer la session si ce n'est pas déjà fait
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    
    // Vider complètement le tableau de SESSION
    $_SESSION = [];
    
    // Détruire la session
    session_destroy();
    
    // Rediriger vers la page d'accueil
    Flight::redirect('/');
    exit();
});

Flight::route('/suppression-@id_emp.html',function($id_emp){
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $pdo = Flight::get('pdo');
    if($_SESSION['user_admin']==1){
        $Stmt = $pdo->prepare("DELETE FROM employe where id_emp=$id_emp");
        $Stmt->execute();
        Flight::redirect("/gestion_des_salaries.html");
    }
    else{
        Flight::redirect("/");
    }

});

function ajoutSalarieAffichage(){
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
        'user_id' => isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null,
        ];
        if($_SESSION['user_admin']==1){Flight::render('./templates/ajoutSalarie.tpl',$data);}
        else{Flight::redirect('/');}
        
}

function ajoutSalarie(){
    $post = Flight::request()->data;
    // Initialisation d'un tableau pour les erreurs
    $errors = [];

    if (empty($post->email)) {
        $errors['email'] = "L'email est requis";
    } elseif (!filter_var($post->email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Format d'email invalide";
    }
    if (empty($post->nom)) {
        $errors['nom'] = "Le nom est requis";
    }
    if (empty($post->prenom)) {
        $errors['prenom'] = "Le prenom est requis";
    }
    if (empty($post->mdp)) {
        $errors['mdp'] = "Le mot de passe provisoire est requis";
    }
    if (empty($post->matricule)) {
        $errors['matricule'] = "Le matricule est requis";
    } elseif (!ctype_digit($post->matricule)) {
        $errors['matricule'] = "Le matricule doit être une série de chiffres";
    }
    if (empty($post->datenaissance)) {
        $errors['datenaissance'] = "La date de naissance est requise";
    } else {
        $date = DateTime::createFromFormat('Y-m-d', $post->datenaissance);
        if (!$date || $date->format('Y-m-d') !== $post->datenaissance) {
            $errors['datenaissance'] = "La date de naissance doit être une date valide au format YYYY-MM-DD";
        }
    }
    if (empty($post->dateembauche)) {
        $errors['dateembauche'] = "La date d'embauche est requise";
    } else {
        $date = DateTime::createFromFormat('Y-m-d', $post->dateembauche);
        if (!$date || $date->format('Y-m-d') !== $post->dateembauche) {
            $errors['dateembauche'] = "La date d'embauche doit être une date valide au format YYYY-MM-DD";
        }
    }
    if (empty($post->salaire)) {
        $errors['salaire'] = "Le salaire est requis";
    } elseif (!is_numeric($post->salaire)) {
        $errors['salaire'] = "Le salaire doit être une série de chiffres";
    }
    if (empty($post->tel)) {
        $errors['tel'] = "Le téléphone est requis";
    } elseif (!ctype_digit($post->tel)) {
        $errors['tel'] = "Le téléphone doit être une série de chiffres";
    }

    if (!empty($errors)) {
        Flight::redirect('/ajoutSalarie.html');
        return;
    }


    $pdo = Flight::get('pdo');
    //try {
        // Préparer la requête d'insertion
        $stmt = $pdo->prepare("
            INSERT INTO employe (email, nom, prenom, id_emp, date_nais, date_emb, salaire, tel, admin, cong, pwd)
            VALUES (:email, :nom, :prenom, :id_emp, :date_nais, :dateembauche, :salaire, :tel, :admin, :cong, :mdp)
        ");

        // Exécuter la requête avec les données du formulaire
        $stmt->execute([
            ':email' => $post->email,
            ':nom' => $post->nom,
            ':prenom' => $post->prenom,
            ':id_emp' => $post->matricule,
            ':date_nais' => $post->datenaissance,
            ':dateembauche' => $post->dateembauche,
            ':salaire' => $post->salaire,
            ':tel' => $post->tel,
            ':admin'=>0,
            ':cong'=>0,
            ':mdp'=>$post->mdp
        ]);

        // Redirection
        Flight::redirect('/gestion_des_salaries.html');
    /*} catch (PDOException $e) {
        //Erreur de base de données
        $errors['general'] = "Erreur de base de données : " . $e->getMessage();
        Flight::redirect('./ajoutSalarie.html');
    }*/
};
Flight::route('GET /ajoutSalarie.html', 'ajoutSalarieAffichage');
Flight::route ('POST /ajoutSalarie.html', 'ajoutSalarie');


Flight::route('GET /modification-@id_empl.html',function($id_empl){

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
     
    $pdo = Flight::get('pdo');

    $stmt = $pdo->prepare("SELECT * FROM employe where id_emp= :id_empl");
    $stmt->execute([':id_empl' => $id_empl]);
    $var = $stmt->fetch(PDO::FETCH_ASSOC);
    $data['emp']=$var;
    Flight::render('./templates/modificationSalarie.tpl', $data);
});

function modifSalarie($id_empl) {
    $post = Flight::request()->data;
    // Initialisation d'un tableau pour les erreurs
    $errors = [];

    if (empty($post->email)) {
        $errors['email'] = "L'email est requis";
    } elseif (!filter_var($post->email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Format d'email invalide";
    }
    if (empty($post->nom)) {
        $errors['nom'] = "Le nom est requis";
    }
    if (empty($post->prenom)) {
        $errors['prenom'] = "Le prénom est requis";
    }
    if (empty($post->matricule)) {
        $errors['matricule'] = "Le matricule est requis";
    } elseif (!ctype_digit($post->matricule)) {
        $errors['matricule'] = "Le matricule doit être une série de chiffres";
    }
    if (empty($post->datenaissance)) {
        $errors['datenaissance'] = "La date de naissance est requise";
    } /*else {
        $date = DateTime::createFromFormat('Y-m-d', $post->datenaissance);
        if (!$date || $date->format('Y-m-d') !== $post->datenaissance) {
            $errors['datenaissance'] = "La date de naissance doit être une date valide au format YYYY-MM-DD";
        }
    }*/
    if (empty($post->dateembauche)) {
        $errors['dateembauche'] = "La date d'embauche est requise";
    } /*else {
        $date = DateTime::createFromFormat('Y-m-d', $post->dateembauche);
        if (!$date || $date->format('Y-m-d') !== $post->dateembauche) {
            $errors['dateembauche'] = "La date d'embauche doit être une date valide au format YYYY-MM-DD";
        }
    }*/
    if (empty($post->salaire)) {
        $errors['salaire'] = "Le salaire est requis";
    } /*elseif (!is_numeric($post->salaire)) {
        $errors['salaire'] = "Le salaire doit être une série de chiffres";
    }*/
    if (empty($post->tel)) {
        $errors['tel'] = "Le téléphone est requis";
    } elseif (!ctype_digit($post->tel)) {
        $errors['tel'] = "Le téléphone doit être une série de chiffres";
    }

    if (!empty($errors)) {
        // Gestion des erreurs
        Flight::redirect('/');
    }

    $pdo = Flight::get('pdo');
    //try {
        // Préparer la requête de mise à jour
        $stmt = $pdo->prepare("UPDATE employe SET 
            email = :email,
            nom = :nom,
            prenom = :prenom,
            date_nais = :date_nais,
            date_emb = :dateembauche,
            salaire = :salaire,
            tel = :tel
            WHERE id_emp = :id_emp");

        // Exécuter la requête avec les données du formulaire
        $stmt->execute([
            ':email' => $post->email,
            ':nom' => $post->nom,
            ':prenom' => $post->prenom,
            ':date_nais' => $post->datenaissance,
            ':dateembauche' => $post->dateembauche,
            ':salaire' => $post->salaire,
            ':tel' => $post->tel,
            ':id_emp' => $id_empl
        ]);

        // Redirection après modification
        Flight::redirect('/gestion_des_salaries.html');
    /*} catch (PDOException $e) {
        // Gestion des erreurs de base de données
        $errors['general'] = "Erreur de base de données : " . $e->getMessage();
        Flight::redirect('/modifSalarie.html');
    }*/
}
Flight::route ('POST /modification-@id_empl.html', 'modifSalarie');


//
// personnalise la page 404
//
Flight::map('notFound', function(){
   echo "<p>404. la route spécifiée n'existe pas</p>";
});

//
//fin du fichier, pas d'autre code que les routes