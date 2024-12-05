<?php
/* Smarty version 4.2.1, created on 2024-11-29 09:59:19
  from 'C:\Users\cheva\OneDrive\Bureau\Cours\SEMESTRE 3\SAE web\SAE_S3_GERICO\test_framework\templates\Fiche_De_Paie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_674990772fd436_23285910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b74e8d38b5816454c2eb9de35807cca0e8205fd1' => 
    array (
      0 => 'C:\\Users\\cheva\\OneDrive\\Bureau\\Cours\\SEMESTRE 3\\SAE web\\SAE_S3_GERICO\\test_framework\\templates\\Fiche_De_Paie.tpl',
      1 => 1732874169,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674990772fd436_23285910 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
            <?php if ($_smarty_tpl->tpl_vars['user_admin']->value == 1) {?>
            <li class="navtext"><a class="navtext" href="admin.html">Administration</a></li>
            <?php }?>
        </ul>
        <div class="navbar-icons">
            <a class="navbar-icons" href="#notifications">
                <img class="notif" src="../assets/notif.png" alt="image de notifications">
            </a>
            <a class="navbar-icons" href="#profil">
                <a href="./logout"><p>Se déconnecter</p></a>
            </a>
        </div>
    </nav>
    </nav>

    <p><a class="consult_paie" href="../assets/test_fiche_paie.pdf">Consulter votre dernière fiche de paie</p></a>
    <ul class="historic_fiche_paie">
        <li>
            <div class="list-item">
                <span class="info">Période 09/2024 - Matricule 0222</span>
                <span class="date">27/09/2024</span>
            </div>
        </li>
        <li>
            <div class="list-item">
                <span class="info">Période 08/2024 - Matricule 0222</span>
                <span class="date">27/08/2024</span>
            </div>
        </li>
        <li>
            <div class="list-item">
                <span class="info">Période 07/2024 - Matricule 0222</span>
                <span class="date">27/07/2024</span>
            </div>
        </li>
        <li>
            <div class="list-item">
                <span class="info">Période 06/2024 - Matricule 0222</span>
                <span class="date">27/06/2024</span>
            </div>
        </li>
        <li>
            <div class="list-item">
                <span class="info">Période 05/2024 - Matricule 0222</span>
                <span class="date">27/05/2024</span>
            </div>
        </li>
        <li>
            <div class="list-item">
                <span class="info">Période 04/2024 - Matricule 0222</span>
                <span class="date">27/04/2024</span>
            </div>
        </li>
        <li>
            <div class="list-item">
                <span class="info">Période 03/2024 - Matricule 0222</span>
                <span class="date">27/03/2024</span>
            </div>
        </li>
    </ul>
    
    
    
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