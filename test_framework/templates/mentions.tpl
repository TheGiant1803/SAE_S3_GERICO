<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentions Légales</title>
    <link rel="stylesheet" href="../styles/style.css">
        <link rel="icon" type="image/png" href="../../assets/ptitlogo.png">

</head>
<body>
    <nav>
        <nav class="bar"></nav> <!-- C'est la ligne bleu foncé tout en haut-->
    
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

        <div class="titre-cookies">Mentions Légales</div>

        <div class="ajout_fiche_paie cookies-espace-block">
            <div class="gestion-text">1. Éditeur du site</div>
            <p1 class="espace-entre-p">Nom de l'entreprise : Gerico</p1>
            <p1 class="espace-entre-p">Forme juridique : SARL</p1>
            <p1 class="espace-entre-p">Adresse : AMIENS 80000, 6 rue des jacobins</p1>
            <p1 class="espace-entre-p">Téléphone : +33 6 85 93 15 24</p1>
            <p1 class="espace-entre-p">Email : gerico@gerico.fr</p1>
            <p1 class="espace-entre-p">Numéro SIRET : 123 456 789 00012</p1>
            <p1 class="espace-entre-p">Directeur de publication : JUSSELME Lenny</p1>
        </div>


        <div class="ajout_fiche_paie cookies-espace-block">
            <div class="gestion-text">2. Hébergement</div>
            <p1 class="espace-entre-p">Hébergeur : OVHcloud</p1>
            <p1 class="espace-entre-p">Adresse : 2 rue Kellermann, 59100 Roubaix, France</p1>
            <p1 class="espace-entre-p">Téléphone : +33 9 72 10 10 07</p1>
            <ul class="list-cookies">
        </div>


        <div class="ajout_fiche_paie cookies-espace-block">
            <div class="gestion-text">3. Propriété intellectuelle</div>
            <p1 class="espace-entre-p">Le contenu du site (textes, images, illustrations, logos, etc.) est protégé par le droit de la propriété intellectuelle. Toute reproduction, représentation ou distribution, en tout ou partie, des éléments du site sans autorisation préalable est interdite.</p1>
            <ul class="list-cookies">
        </div>

         <div class="ajout_fiche_paie cookies-espace-block">
            <div class="gestion-text">4. Données personnelles</div>
            <p1 class="espace-entre-p">Le site peut collecter des données personnelles pour l'utilisation des newsletter. Ces données sont traitées dans le respect des règlements en vigueur (RGPD). Pour toute demande concernant vos données personnelles, contactez-nous à : données-gerico@gerico.fr.</p1>
            <ul class="list-cookies">
        </div>

         <div class="ajout_fiche_paie cookies-espace-block">
            <div class="gestion-text">5. Responsabilités</div>
            <p1 class="espace-entre-p">Le site ne saurait être tenu responsable des dommages directs ou indirects causés au matériel de l'utilisateur lors de l'accès au site, ou en cas d’erreur ou d’omission dans le contenu.</p1>
            <ul class="list-cookies">
        </div>

        <div class="ajout_fiche_paie cookies-espace-block">
            <div class="gestion-text">6. Contact</div>
            <p1 class="espace-entre-p">Pour toute question concernant les mentions légales, merci de nous contacter à : contact-gerico@gerico.fr.</p1>
            <ul class="list-cookies">
        </div>
    </div>

<footer class="foot_bar bar">
    <div class="foot_titre">@2024 Gerico. Transport</div>
    <ul class="foot_ul_text">
        <li class="foot_text"><a class="foot_text" href="./politique_rgpd.html">Politique RGPD</a></li>
        <li class="foot_text"><a class="foot_text" href="./cookies.html">Gestion des cookies</a></li>
        <li class="foot_text"><a class="foot_text" href="./mentions.html">Mentions légales</a></li>
    </ul>
</footer>

</body>
</html>