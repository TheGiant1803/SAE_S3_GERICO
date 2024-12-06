<?php
/* Smarty version 4.2.1, created on 2024-12-06 14:17:52
  from 'C:\Users\Lenny\SAE_S3_GERICO\test_framework\templates\modificationSalarie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_67530790996d55_79239659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e356873bce253a1991df0e5566aec8353a9ae7f' => 
    array (
      0 => 'C:\\Users\\Lenny\\SAE_S3_GERICO\\test_framework\\templates\\modificationSalarie.tpl',
      1 => 1733494656,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67530790996d55_79239659 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification salarié</title>
    <link rel="stylesheet" href="../styles/style.css">
    <style>     
        
        
        
  </style>
</head>
<body>
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
    
    <div class="container_modsal">
        <h2>
         Modification du salarié
        </h2>
        <div class="form-group">
         <div>
<form method="post" action="./routes.php">

    <label>Nom :</label>
    <input type="text" name="nom" value="<?php echo $_smarty_tpl->tpl_vars['emp']->value['nom'];?>
" required>

    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" value="<?php echo $_smarty_tpl->tpl_vars['emp']->value['prenom'];?>
" required> 

    <label>Matricule :</label>
    <input type="text" name="matricule_affichage" value="{{ salarie.id_emp }}" disabled>

    <label>Date de Naissance :</label>
    <input type="date" name="datenaissance" value="{{ salarie.date_nais }}" required>

    <label>Date d'Embauche :</label>
    <input type="date" name="dateembauche" value="{{ salarie.date_emb }}" required>

    <label>Salaire :</label>
    <input type="text" name="salaire" value="{{ salarie.salaire }}" required>

    <label>Email :</label>
    <input type="email" name="email" value="{{ salarie.email }}" required>

    <label>Téléphone :</label>
    <input type="text" name="tel" value="{{ salarie.tel }}" required>

    <button type="submit">Enregistrer les modifications</button>
</form>

          <input id="telep" type="text" size="40"/>
         </div>
        </div>
        <div class="form-actions">
         <button class="reset">
          Réinitialiser
         </button>
         <button>
          Valider
         </button>
        </div>
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
