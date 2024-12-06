<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des salariés</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <nav>
        <nav class="bar"></nav> <!-- C'st la ligne bleu foncé touten haut-->
    
    <nav class="navbar">
        <div class="logo-container">
            <a href="./">
                <img class="logo" src="../assets/logo.png" alt="image de logo">
            </a>
        </div>
        <ul class="navbar_text">
            <li class="navtext"><a class="navtext" href="./">Accueil</a></li>
            <li class="navtext"><a class="navtext" href="congé1.html">Gestion des congés</a></li>
            <li class="navtext"><a class="navtext" href="Fiche_De_Paie.html">Consulter vos fiches de paie</a></li>
            {if $user_admin==1}
            <li class="navtext active"><a class="navtext" href="admin.html">Administration</a></li>
            {/if}
        </ul>
        <div class="navbar-icons">
            <a class="navbar-icons" href="#notifications">
                <img class="notif" src="../assets/notif.png" alt="image de notifications">
            </a>
            <a class="navbar-icons" href="#profil">
                <a href="./logout"><p class="se-deconnecter">Se déconnecter</p></a>
            </a>
        </div>
    </nav>
    </nav>

    <div class="centrer-suivant-preced">
         <div class="gestion-fiches">
            
            <ul class="ajout_fiche_paie">
                <div class="gestion-text">
                    Gestion des salariés
                    <a href="./ajoutSalarie.html"><p>Ajouter</p></a>
                </div>
                {if !empty($employes)}
                    {foreach from=$employes item=employe}
                    <li>
                        <div class="list-item">
                            <span class="info">{$employe.nom} {$employe.prenom} - Matricule {$employe.id_emp}</span>
                            <span class="date"> <a href="./modificationSalarie.html">MODIFIER</a> | <a href="./suppression-{$employe.id_emp}.html"> SUPPRIMER </a></span>
                        </div>
                    </li>
                    {/foreach}
                {else}
                <li>
                    <span class="info">Aucun employé trouvé.</span>
                </li>
                {/if}
            </ul>
        </div>
        
        <!-- Navigation de la pagination -->
        <div class="separation-des-boutons">
            {if $page > 1}
                <a class="apparance-des-liens" href="./gestion_des_salaries.html?page={$page-1}">Précédent</a>
            {/if}
            
            {if $page < $total_pages}
                <a class="apparance-des-liens" href="./gestion_des_salaries.html?page={$page+1}">Suivant</a>
            {/if}
        </div>
    </div>
       
        

    
    
    
    <footer class="foot_bar bar">
        <div class="foot_titre">@2024 Gerico. Transport</div>
        <ul class="foot_ul_text">
            <li class="foot_text"><a class="foot_text" href="#rgpd">Politique RGPD</a></li>
            <li class="foot_text"><a class="foot_text" href="#cookies">Gestion des cookies</a></li>
            <li class="foot_text"><a class="foot_text" href="#mentions">Mentions légales</a></li>
        </ul>
    </footer>
    
</body>
</html>

