<?php
/* Smarty version 4.2.1, created on 2024-12-05 10:49:23
  from 'C:\Users\cheva\OneDrive\Bureau\Cours\SEMESTRE 3\SAE web\SAE_S3_GERICO\test_framework\templates\gestion_cong_date.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_67518533cc3fe9_12147304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '995e48f8a972d85331a7668251ac5395d7def4b9' => 
    array (
      0 => 'C:\\Users\\cheva\\OneDrive\\Bureau\\Cours\\SEMESTRE 3\\SAE web\\SAE_S3_GERICO\\test_framework\\templates\\gestion_cong_date.tpl',
      1 => 1733395708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67518533cc3fe9_12147304 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion date de congés</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/style.css">
  </head>
  <body>

    <nav>
      <nav class="bar"></nav> <!-- C'est la ligne bleu foncé touten haut-->
  
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
                <a href="./logout"><p class="se-deconnecter">Se déconnecter</p></a>
            </a>
      </div>
  </nav>
  </nav>


    <div id="container-cong">
        <h1>Demande de Congés :</h1>
        <form action="#" method="post">
          <div class="form-group">
            <label for="date_cong">Date :</label>
            <input type="date" class="form-control" id="date_cong" name="date_cong" required>
          </div>
          <div class="form-group">
            <label for="duration">Sélectionnez la durée :</label>
              <select class="form-select" id="duration" name="duration" required>
                <option selected disabled>-</option>
                <option value="matin">Matin</option>
                <option value="après_midi">Après-midi</option>
                <option value="Journée">Journée complète</option>
              </select>
          </div>
          <div class="form-group">
            <label for="motif">Motif du congé</label>
            <input type="text" class="form-control motif" id="motif" name="motif" required>
          </div>
          <input type="submit" value ="Envoyer la demande">
        </form>
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
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"><?php echo '</script'; ?>
>
</html><?php }
}
