<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des fiches de paie</title>
    <link rel="stylesheet" href="../styles/style.css">
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
            <li class="navtext active"><a class="navtext" href="Fiche_De_Paie.html">Consulter vos fiches de paie</a></li>
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

    <div class="centrer-titre-fiche">
        <form action="" method="post">
            <input type="hidden" id="id_fiche" name="id_fiche" value="{$fiche_paie[0]['id_fp']}">
            <input type="submit" value="Consulter votre derniere fiche de paie">
        </form>
    </div>
    <div class="gestion-fiches">
        <ul class="ajout_fiche_paie">
            {foreach $fiche_paie as $fiche} 
            <li>
                <div class="list-item">
                    <span class="info">Période {$fiche.periode} - N° {$fiche.id_fp} - 
                        <form action="" method="post">
                            <input type="hidden" id="id_fiche" name="id_fiche" value="{$fiche.id_fp}">
                            <input type="submit" value="PDF" class="pdf-button">
                        </form> 
                    </span>
                    <span class="date">{$fiche.date_fiche}</span> 
                </div>
            
            </li>
            {/foreach}
        </ul>
    
    
    <div class="separation-des-boutons">
        {if $page > 1}
            <a class="apparance-des-liens" href="./Fiche_De_Paie.html?page={$page-1}">Précédent</a>
        {/if}
        
        {if $page < $total_pages}
            <a class="apparance-des-liens" href="./Fiche_De_Paie.html?page={$page+1}">Suivant</a>
        {/if}
    </div>
</div>
    
    
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

