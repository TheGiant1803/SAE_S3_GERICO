<?php
/* Smarty version 4.2.1, created on 2024-12-17 10:07:57
  from 'C:\Users\Lenny\SAE_S3_GERICO\test_framework\templates\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_67614d7dd95e71_10565430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14af7eb0dd2416db51bba5d9aff16584c2546713' => 
    array (
      0 => 'C:\\Users\\Lenny\\SAE_S3_GERICO\\test_framework\\templates\\admin.tpl',
      1 => 1734428918,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67614d7dd95e71_10565430 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration</title>
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
            <li class="navtext "><a class="navtext" href="./">Accueil</a></li>
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
    <main>
        <div class="container_b">
            <a href="gestion_des_salaries.html">
                <div class="box">
                    <button>Gestion des salariés</button>
                </div>
            </a>
            <a href="admin_validation_congés.html">
                <div class="box">
                    <button>Validation des congés</button>
                </div>
            </a>
            <a href="Ajout_fiche_paie.html">
                <div class="box">
                    <button>Ajouter des fiches de paie</button>
                </div>
            </a>
        </div>
    </main>
    
    <footer class="foot_bar bar">
        <div class="foot_titre">@2024 Gerico. Transport</div>
        <ul class="foot_ul_text">
            <li class="foot_text"><a class="foot_text" href="#rgpd">Politique RGPD</a></li>
            <li class="foot_text"><a class="foot_text" href="cookies.html">Gestion des cookies</a></li>
            <li class="foot_text"><a class="foot_text" href="./mentions.html">Mentions légales</a></li>
        </ul>
    </footer>
    
</body>
</html><?php }
}
