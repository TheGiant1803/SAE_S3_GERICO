<?php
/* Smarty version 4.2.1, created on 2024-12-07 14:45:23
  from 'C:\Users\Antoine\OneDrive\Bureau\But\BUT2\S3\SAE_S3_GERICO\test_framework\templates\gestion_cong_date.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_67545f83987e57_81568891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da8568bac4e5a399223cff34fa787ecda1dbf930' => 
    array (
      0 => 'C:\\Users\\Antoine\\OneDrive\\Bureau\\But\\BUT2\\S3\\SAE_S3_GERICO\\test_framework\\templates\\gestion_cong_date.tpl',
      1 => 1733582721,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67545f83987e57_81568891 (Smarty_Internal_Template $_smarty_tpl) {
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


    <div class="container-cong">
      <div class="box-cong">
        <div class="gestion-text">Demande de Congés :</div>

        <form method="post" action="" class="form-cong">
          <div class="form-group">
            <label for="date_cong" min="">Date :</label>
            <input type="date" class="form-control date_cong" id="date_cong" name="date_cong" required>
          </div>
          <div class="form-group">
            <label for="start">Heure de début :</label>
              <select class="form-select" id="start" name="start" required>
                <option selected value="matin">Matin</option>
                <option value="après_midi">Après-midi</option>
              </select>
          </div>
          <div class="form-group">
            <label for="nb_jour">Nombre de demi-journée :</label>
              <input type="number" class="form-control" id="nb_jour" name="nb_jour" required>
          </div>
          <div class="form-group motif1">
            <label for="motif">Motif du congé :</label>
            <select class="form-select" id="motif" name="motif" required>
                <option selected value="RTT">RTT</option>
                <option value="maladie">maladie</option>
                <option value="maternité">maternité</option>
            </select>
          </div>
          <input type="submit" value="Envoyer la demande" class="submit submit1 submit-button">
        </form>
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
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"><?php echo '</script'; ?>
>
</html><?php }
}
