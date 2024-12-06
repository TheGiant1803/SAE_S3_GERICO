<?php
/* Smarty version 4.2.1, created on 2024-12-06 09:13:06
  from 'C:\Users\ASUS\OneDrive\Documents\GitHub\SAE_S3_GERICO\test_framework\templates\Ajout_fiche_paie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6752c02214b390_17420659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44351b6881ea3ea1a18953b134c233564c16bfb7' => 
    array (
      0 => 'C:\\Users\\ASUS\\OneDrive\\Documents\\GitHub\\SAE_S3_GERICO\\test_framework\\templates\\Ajout_fiche_paie.tpl',
      1 => 1733404635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6752c02214b390_17420659 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des fiches de paie</title>
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
            <li class="navtext active"><a class="navtext" href="admin.html">Administration</a></li>
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
    
    <div  class="gestion-fiches">
    <ul class="ajout_fiche_paie">
        <div class="gestion-text">
            Gestion des payes
        </div>             
        <li>
            <div class="list-item">
                <span class="info">CARPENTIER Bruno - Matricule 006</span>
                <span class="date">27/09/2024</span>
            </div>
        </li>
        <li>
            <div class="list-item">
                <span class="info">BEAUJOUR THOMAS - Matricule 007</span>
                <span class="date">27/09/2024</span>
            </div>
        </li>
        <li>
            <div class="list-item">
                <span class="info">MARTIN Dominique - Matricule 009</span>
                <span class="date">27/09/2024</span>
            </div>
        </li>
        <li>
            <div class="list-item">
                <span class="info">DUPONT STEPHANE - Matricule 010</span>
                <span class="date">27/09/2024</span>
            </div>
        </li>
        <li>
            <div class="list-item">
                <span class="info">LEGOIX Jérémy - Matricule 011</span>
                <span class="date">27/09/2024</span>
            </div>
        </li>
        <li>
            <div class="list-item">
                <span class="info">GARNIER Alexandra - Matricule 013</span>
                <span class="date">27/09/2024</span>
            </div>
        </li>
    </ul>
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

<?php }
}
