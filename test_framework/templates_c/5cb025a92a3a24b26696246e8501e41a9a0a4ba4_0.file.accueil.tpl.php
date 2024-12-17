<?php
/* Smarty version 4.2.1, created on 2024-12-17 09:58:51
  from 'C:\Users\Lenny\SAE_S3_GERICO\test_framework\templates\accueil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_67614b5b0b3e40_14846995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cb025a92a3a24b26696246e8501e41a9a0a4ba4' => 
    array (
      0 => 'C:\\Users\\Lenny\\SAE_S3_GERICO\\test_framework\\templates\\accueil.tpl',
      1 => 1734428886,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67614b5b0b3e40_14846995 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="icon" type="image/png" href="../../assets/employees.png">
</head>
<body>
    <nav>
        <nav class="bar"></nav> <!-- C'st la ligne bleu foncé touten haut-->
    
    <nav class="navbar">
        <div class="logo-container">
            <a href="">
                <img class="logo" src="../assets/logo.png" alt="image de logo">
            </a>
        </div>
        <ul class="navbar_text">
            <li class="navtext active"><a class="navtext" href="">Accueil</a></li>
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
    
    
    <div class="accueil">
        <div class="block_news">
            
            <div class="bonjour-user"><?php if ($_smarty_tpl->tpl_vars['user_name']->value) {?>
            Bonjour <?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['user_prenom']->value;?>
 !
            <?php }?>
            </div>
            <br>

            <h1 class="titre_news">Actualités :</h1>
            <ul>
                <li class="text_news">Gérico célèbre ses 25 ans d'excellence dans le transport routier, <span class="blue-text">30 décembre 2024</span></li>
                <li class="text_news">Mise en place d'un nouveau programme de formation pour les employés, <span class="blue-text">12 octobre 2024</span></li>
                <li class="text_news">Gérico s'engage pour l'environnement avec des initiatives écologiques, <span class="blue-text">30 septembre 2024</span></li>
                <li class="text_news">Partenariat stratégique avec Amazon pour améliorer les services, <span class="blue-text">15 septembre 2024</span></li>
            </ul>
        </div>
        <div class="image-container">
            <img class="image_dir" src="../assets/imgDir.png" alt="image de directeur">
            <div class="text-overlay-container">
                <p class="text-overlay overlay-paragraph blue-text"> <span class="blue-light-text">Gerico</span></p>
                <p class="text-overlay overlay-paragraph">Votre logistique, notre priorité :</p>
                <p class="text-overlay overlay-paragraph">transport rapide, fiable et sur-mesure pour</p>
                <p class="text-overlay overlay-paragraph">tous vos besoins</p>
            </div>
            <div class="description_container">        
                <p class="article">Fondée en 1999, Gerico est spécialisée dans le transport de marchandises et propose des solutions
                logistiques sur-mesure. Ponctuelle, fiable et axée sur la satisfaction client, Gerico assure des livraisons sécurisées à
                tous niveaux grâce à sa flotte moderne et ses chauffeurs qualifiés.</p>
                <div class="icons">
                    <div class="every_icon">
                        <img class="image_icon" src="../assets/colis.png" alt="image de camion">
                        <p class="description_image">256 812 colis</p>
                    </div>
                    <div class="every_icon">
                        <img class="image_icon" src="../assets/employees.png" alt="image des employees">
                        <p class="description_image">25 employés</p>
                    </div>
                    <div class="every_icon">
                        <img class="image_icon" src="../assets/argent.png" alt="image de l'argent">
                        <p class="description_image">468 000€ CA/an</p>
                    </div>
                    <div class="every_icon">
                        <img class="image_icon" src="../assets/contrat.png" alt="image de contrat">
                        <p class="description_image">3846 contrats signés</p>
                    </div>                           
                </div>           
            </div> 
        </div>      
    </div>
    
    
    <footer class="foot_bar bar">
        <div class="foot_titre">@2024 Gerico. Transport</div>
        <ul class="foot_ul_text">
            <li class="foot_text"><a class="foot_text" href="#rgpd">Politique RGPD</a></li>
            <li class="foot_text"><a class="foot_text" href="cookies.html">Gestion des cookies</a></li>
            <li class="foot_text"><a class="foot_text" href="./mentions.html">Mentions légales</a></li>
        </ul>
    </footer>
    
</body>
</html>

<?php }
}
