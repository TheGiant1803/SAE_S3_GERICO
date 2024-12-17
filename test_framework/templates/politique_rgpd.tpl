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

    
    <div class="cookies-en-general">
        <div class="titre-cookies">Politique de Protection des Données</div>

        <div class="ajout_fiche_paie politique-espace-block">
            <div class="gestion-text">Introduction</div>
            <p1 class="espace-entre-p">Chez GERICO, la protection de vos données personnelles est une priorité. 
                Cette politique vise à vous informer sur la manière dont nous collectons, utilisons, stockons et protégeons vos informations personnelles.
                 Nous nous engageons à respecter la réglementation en vigueur, notamment le Règlement Général sur la Protection des Données (RGPD).</p1>
        </div>


        <div class="ajout_fiche_paie politique-espace-block">
            <div class="gestion-text">Données collectées</div>
            <p1 class="espace-entre-p">Nous pouvons être amenés à collecter différents types de données personnelles, notamment :</p1>
            <ul class="list-cookies">
                <li>Données d’identité (nom, prénom, adresse électronique, téléphone, etc.).</li>
                <li>Données de connexion (adresse IP, journaux de connexion).</li>
                <li>Données de navigation sur notre site internet (cookies, préférences de navigation, etc.).</li>
                <li>Données liées à vos interactions avec notre service client.</li>
            </ul>
        </div>


        <div class="ajout_fiche_paie politique-espace-block">
            <div class="gestion-text">Finalités du traitement des données</div>
            <p1 class="espace-entre-p">GERICO utilise vos données pour les finalités suivantes :</p1>
            <ul class="list-cookies">
                <li>La gestion de la relation client (réponses aux demandes d’information, traitement des réclamations, etc.).</li>
                <li>L’amélioration de l’expérience utilisateur sur le site web.</li>
                <li>L’envoi d’informations commerciales ou promotionnelles (sous réserve de votre consentement préalable).</li>
                <li>La sécurité et la prévention des fraudes.</li>
            </ul>
        </div>


        <div class="ajout_fiche_paie politique-espace-block">
            <div class="gestion-text">Partage et transfert de données</div>
            <p1 class="espace-entre-p">Les données personnelles collectées par GERICO ne sont partagées qu’avec des tiers strictement nécessaires à la prestation de nos services 
                (prestataires de service, partenaires techniques, etc.).
                 Nous veillons à ce que ces tiers respectent des normes de sécurité et de confidentialité équivalentes aux nôtres.
                  Aucun transfert de données en dehors de l’Union européenne n’est effectué sans votre consentement explicite.</p1>
        </div>


        <div class="ajout_fiche_paie politique-espace-block">
            <div class="gestion-text">Durée de conservation des données</div>
            <p1 class="espace-entre-p">Les données personnelles sont conservées uniquement pendant la durée nécessaire aux finalités pour lesquelles elles sont collectées,
                 conformément aux dispositions légales en vigueur. 
                 Par exemple, les données liées à la gestion de la relation client sont conservées pendant la durée de la relation contractuelle et au-delà,
                  si la loi l’exige.</p1>
        </div>


        <div class="ajout_fiche_paie politique-espace-block">
            <div class="gestion-text">Vos droits</div>
            <p1 class="espace-entre-p">Conformément à la réglementation sur la protection des données, vous disposez des droits suivants :</p1>
            <ul class="list-cookies">
                <li><b>Droit d’accès</b> : obtenir une copie des données vous concernant</li>
                <li><b>Droit de rectification</b> : corriger les données inexactes ou incomplètes.</li>
                <li><b>Droit d’effacement ("droit à l’oubli")</b> : demander la suppression de vos données dans certaines conditions.</li>
                <li><b>Droit à la limitation</b> : restreindre temporairement l’utilisation de vos données.</li>
                <li><b>Droit d’opposition</b> : vous opposer au traitement de vos données à des fins de prospection commerciale.</li>
                <li><b>Droit à la portabilité</b> : recevoir vos données dans un format lisible par machine.
                    Pour exercer ces droits, vous pouvez nous contacter à l’adresse électronique suivante : <b>contact@gerico.com</b>.</li>
            </ul>
        </div>


        <div class="ajout_fiche_paie politique-espace-block">
            <div class="gestion-text">Sécurité des données</div>
            <p1 class="espace-entre-p">GERICO met en place des mesures de sécurité techniques et organisationnelles appropriées 
                afin de protéger vos données personnelles contre tout accès non autorisé, perte, altération ou destruction accidentelle. 
                Ces mesures incluent le chiffrement des données, la surveillance des accès et la sensibilisation des équipes internes.</p1>
        </div>


        <div class="ajout_fiche_paie politique-espace-block">
            <div class="gestion-text">Gestion des cookies</div>
            <p1 class="espace-entre-p">GERICO utilise des cookies et des technologies similaires sur son site web. 
                Ces cookies permettent d'améliorer votre expérience utilisateur et de collecter des statistiques d’utilisation. 
                Vous avez la possibilité de gérer vos préférences en matière de cookies à tout moment via le module de gestion des cookies présent sur notre site.</p1>
        </div>


        <div class="ajout_fiche_paie politique-espace-block">
            <div class="gestion-text">Modification de la politique</div>
            <p1 class="espace-entre-p">GERICO se réserve le droit de modifier cette politique de protection des données 
                à tout moment afin de se conformer aux évolutions législatives et réglementaires. 
                Les modifications seront publiées sur notre site et entreront en vigueur dès leur mise en ligne.</p1>
        </div>


        <div class="ajout_fiche_paie politique-espace-block">
            <div class="gestion-text">Contact</div>
            <p1 class="espace-entre-p">Pour toute question relative à cette politique de protection des données ou à l’exercice de vos droits, 
                vous pouvez contacter notre délégué à la protection des données à l’adresse <b>dpo@gerico.com</b> ou par courrier 
                à l’adresse suivante : GERICO, [Adresse postale complète].</p1>
        </div>
    </div>   
    
    
    <footer class="foot_bar bar">
        <div class="foot_titre">@2024 Gerico. Transport</div>
        <ul class="foot_ul_text">
            <li class="foot_text"><a class="foot_text" href="#">Politique RGPD</a></li>
            <li class="foot_text"><a class="foot_text" href="cookies.html">Gestion des cookies</a></li>
            <li class="foot_text"><a class="foot_text" href="./mentions.html">Mentions légales</a></li>
        </ul>
    </footer>
    
</body>
</html>