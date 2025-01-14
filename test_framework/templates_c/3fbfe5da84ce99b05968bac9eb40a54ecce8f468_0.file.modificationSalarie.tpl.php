<?php
/* Smarty version 4.2.1, created on 2024-12-19 13:51:27
  from 'C:\Users\Antoine\OneDrive\Bureau\But\BUT2\S3\SAE_S3_GERICO\test_framework\templates\modificationSalarie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_676424df16b713_30238887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fbfe5da84ce99b05968bac9eb40a54ecce8f468' => 
    array (
      0 => 'C:\\Users\\Antoine\\OneDrive\\Bureau\\But\\BUT2\\S3\\SAE_S3_GERICO\\test_framework\\templates\\modificationSalarie.tpl',
      1 => 1734430588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_676424df16b713_30238887 (Smarty_Internal_Template $_smarty_tpl) {
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
<form actions="" method="post">

    <label>Nom :</label>
    <input type="text" name="nom" id="nom" value="<?php echo $_smarty_tpl->tpl_vars['emp']->value['nom'];?>
" required>

    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom" value="<?php echo $_smarty_tpl->tpl_vars['emp']->value['prenom'];?>
" required> 

    <label>Matricule :</label>
    <input type="text" name="matricule_affichage" id="matricule" value="<?php echo $_smarty_tpl->tpl_vars['emp']->value['id_emp'];?>
" disabled>

    <label>Date de Naissance :</label>
    <input type="date" name="datenaissance" id="datenaissance" value="<?php echo $_smarty_tpl->tpl_vars['emp']->value['date_nais'];?>
" required>

    <label>Date d'Embauche :</label>
    <input type="date" name="dateembauche" value="<?php echo $_smarty_tpl->tpl_vars['emp']->value['date_emb'];?>
" required>

    <label>Salaire :</label>
    <input type="text" name="salaire"  id="salaire" value="<?php echo $_smarty_tpl->tpl_vars['emp']->value['salaire'];?>
" required>

    <label>Email :</label>
    <input type="email" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['emp']->value['email'];?>
" required>

    <label>Téléphone :</label>
    <input type="text" name="tel" id="tel" value="<?php echo $_smarty_tpl->tpl_vars['emp']->value['tel'];?>
" required>

    <button type="submit">Enregistrer les modifications</button>
</form>
         </div>
        </div>
       </div>

    
    <footer class="foot_bar bar">
        <div class="foot_titre">@2024 Gerico. Transport</div>
        <ul class="foot_ul_text">
            <li class="foot_text"><a class="foot_text" href="politique_rgpd.html">Politique RGPD</a></li>
            <li class="foot_text"><a class="foot_text" href="cookies.html">Gestion des cookies</a></li>
            <li class="foot_text"><a class="foot_text" href="./mentions.html">Mentions légales</a></li>
        </ul>
    </footer>
    
</body>
</html>

<?php }
}
