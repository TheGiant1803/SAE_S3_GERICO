<?php
/* Smarty version 4.2.1, created on 2024-12-01 17:31:29
  from 'C:\Users\cheva\OneDrive\Bureau\Cours\SEMESTRE 3\SAE web\SAE_S3_GERICO\test_framework\templates\conges1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_674c9d718825c4_10871627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95319ef7976bdd93aa112b94c6f9376b5423250c' => 
    array (
      0 => 'C:\\Users\\cheva\\OneDrive\\Bureau\\Cours\\SEMESTRE 3\\SAE web\\SAE_S3_GERICO\\test_framework\\templates\\conges1.tpl',
      1 => 1732869838,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674c9d718825c4_10871627 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes demandes de congés</title>
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
            <li class="navtext active"><a class="navtext" href="congé1.html">Gestion des congés</a></li>
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
                <a href="./logout"><p>Se déconnecter</p></a>
            </a>
        </div>
    </nav>
    </nav>
    <main>
        <div class="container_b">
            <a class="navtext_cong" href="gestioncongé2.html">
            <div class="box">
                <button>Historique de mes congés</button>
            </div>
            </a>
    
            <a class="navtext_cong" href="gestion_cong_date.html">
            <div class="box">
                <button>Demander un congé</button>
            </div>
            </a>
        </div>
    </main>
    
    <footer class="foot_bar bar">
        <div class="foot_titre">@2024 Gerico. Transport</div>
        <ul class="foot_ul_text">
            <li class="foot_text"><a class="foot_text" href="#rgpd">Politique RGPD</a></li>
            <li class="foot_text"><a class="foot_text" href="#cookies">Gestion des cookies</a></li>
            <li class="foot_text"><a class="foot_text" href="#mentions">Mentions légales</a></li>
        </ul>
    </footer>
    
</body>
</html><?php }
}