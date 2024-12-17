<?php
/* Smarty version 4.2.1, created on 2024-12-17 08:29:54
  from 'C:\Users\cheva\OneDrive\Bureau\Cours\SEMESTRE 3\SAE web\SAE_S3_GERICO\test_framework\templates\cookies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_676136822a20d2_74750841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0355beab25b5d53544340e01b0737e39d94c67af' => 
    array (
      0 => 'C:\\Users\\cheva\\OneDrive\\Bureau\\Cours\\SEMESTRE 3\\SAE web\\SAE_S3_GERICO\\test_framework\\templates\\cookies.tpl',
      1 => 1734423138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_676136822a20d2_74750841 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
            <?php if ($_smarty_tpl->tpl_vars['user_admin']->value == 1) {?>
            <li class="navtext"><a class="navtext" href="admin.html">Administration</a></li>
            <?php }?>
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

        <div class="titre-cookies">Cookies</div>

        <div class="ajout_fiche_paie cookies-espace-block">
            <div class="gestion-text">Qu’est-ce que les cookies ?</div>
            <p1 class="espace-entre-p">Les cookies sont de petits fichiers texte stockés
                sur votre appareil (ordinateur, smartphone, tablette) par les sites web que vous visitez.
                Ils jouent un rôle important dans le fonctionnement des sites web et permettent d’améliorer
                votre expérience en ligne.</p1>
        </div>


        <div class="ajout_fiche_paie cookies-espace-block">
            <div class="gestion-text">Pourquoi utilisons-nous les cookies ?</div>
            <p1 class="espace-entre-p">Nous utilisons des cookies pour les finalités décrites ci-dessous.</p1>
            <p1 class="espace-entre-p">Cookies opérationnels : Nous utilisons des cookies pour fournir nos services pour par exemple : </p1>
            <ul class="list-cookies">
                
                <li>Vous reconnaître lorsque vous vous connectez à notre plateforme.</li>
                <li>Prévenir les activités frauduleuses et renforcer la sécurité.</li>
                <li>Analyser comment nos utilisateurs interagissent avec notre site afin
                    d'identifier des améliorations possibles pour nos services,
                    notamment la gestion des fiches de paie.</li>
                <li>Mesurer les performances de notre plateforme et comprendre comment nous pouvons
                    mieux répondre à vos besoins.</li>
            </ul>
        </div>


        <div class="ajout_fiche_paie cookies-espace-block">
            <div class="gestion-text">Combien de temps conservons-nous les cookies ?</div>
            <p1 class="espace-entre-p">Les cookies que nous utilisons peuvent être :</p1>
            <ul class="list-cookies">
                
                <li>Cookies de session : Ces cookies sont temporaires et expirent lorsque vous fermez votre navigateur.</li>
                <li>Cookies persistants : Ces cookies restent sur votre appareil pendant
                    une période définie ou jusqu’à ce que vous les supprimiez manuellement.</li>
            </ul>
            <p1 class="espace-entre-p">Nous utilisons des cookies persistants pour vous offrir
                une expérience personnalisée lors de vos prochaines visites.</p1>
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

<?php }
}
