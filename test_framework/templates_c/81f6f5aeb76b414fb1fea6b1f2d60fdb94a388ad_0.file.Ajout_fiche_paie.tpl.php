<?php
/* Smarty version 4.2.1, created on 2024-12-17 08:22:30
  from 'C:\Users\carpe\SAE_S3_GERICO\test_framework\templates\Ajout_fiche_paie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_676134c695deb4_27506162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81f6f5aeb76b414fb1fea6b1f2d60fdb94a388ad' => 
    array (
      0 => 'C:\\Users\\carpe\\SAE_S3_GERICO\\test_framework\\templates\\Ajout_fiche_paie.tpl',
      1 => 1734423219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_676134c695deb4_27506162 (Smarty_Internal_Template $_smarty_tpl) {
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
    
    <div class="container_modsal">
        <h2 class="gestion-text">
         Ajout d'une fiche de paie
        </h2>

        <form method="post" action="" enctype="multipart/form-data">
        <label for="date_fp">Date :</label>
            <input type="date" id="date_fp" name="date_fp" required>
        <label for="id_emp">Matricule :</label>
            <input type="number" id="id_emp" name="id_emp" required>
        <label for="fp">Fiche de paie :</label>
            <input type="file" id="fp" name="fp" accept="application/pdf" required>
            <input type="submit" class="envoie-button">
        </form>
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
