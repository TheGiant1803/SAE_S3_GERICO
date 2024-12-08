<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes demandes de congés</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link href="C:\Users\Lenny\SAE3\SAE_S3_GERICO\assets\chau-philomene-one">
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
            <li class="navtext "><a class="navtext" href="./">Accueil</a></li>
            <li class="navtext active"><a class="navtext" href="congé1.html">Gestion des congés</a></li>
            <li class="navtext"><a class="navtext" href="Fiche_De_Paie.html">Consulter vos fiches de paie</a></li>
            {if $user_admin==1}
            <li class="navtext"><a class="navtext" href="admin.html">Administration</a></li>
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
    <main>
        <h1 class="gestion-text">Mes demandes de congés</h1>
        
        <div class="table-container">
        <table id="table">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Date début</th>
                    <th>Date retour</th>
                    <th>Cause</th>
                    <th>Durée</th>
                    <th>Statut</th>
                </tr>
            </thead>
            <tbody>
                {foreach $demande_cp as $demande} 
                <tr>
                    <td>{$demande.id_dcp}</td>
                    <td>{$demande.date_dcp}</td>
                    <td>
                        {$demande.date_retour}
                    </td>  
                    <td>{$demande.motif}</td>
                    <td>{$demande.duree / 2} jour(s)</td>
                    <td>            
                        {if $demande.valid === null}
                            En attente
                        {elseif $demande.valid === 0}
                            Refusé
                        {elseif $demande.valid === 1}
                            Accepté
                        {/if}
                    </td>
                </tr>
                {/foreach}
                
            </tbody>
        </table>
        </div>            
    
    </main>
    
    <footer class="foot_bar bar">
        <div class="foot_titre">@2024 Gerico. Transport</div>
        <ul class="foot_ul_text">
            <li class="foot_text"><a class="foot_text" href="#rgpd">Politique RGPD</a></li>
            <li class="foot_text"><a class="foot_text" href="cookies.html">Gestion des cookies</a></li>
            <li class="foot_text"><a class="foot_text" href="#mentions">Mentions légales</a></li>
        </ul>
    </footer>
    
</body>
</html>