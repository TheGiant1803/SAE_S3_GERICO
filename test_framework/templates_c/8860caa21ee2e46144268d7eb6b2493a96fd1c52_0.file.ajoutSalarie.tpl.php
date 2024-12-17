<?php
/* Smarty version 4.2.1, created on 2024-12-17 08:21:28
  from 'C:\Users\carpe\SAE_S3_GERICO\test_framework\templates\ajoutSalarie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6761348859d613_84634007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8860caa21ee2e46144268d7eb6b2493a96fd1c52' => 
    array (
      0 => 'C:\\Users\\carpe\\SAE_S3_GERICO\\test_framework\\templates\\ajoutSalarie.tpl',
      1 => 1734423219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6761348859d613_84634007 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un salarié</title>
    <link rel="stylesheet" href="../styles/style.css">
    <style>     
        
        
        
  </style>
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
    
   
    <form method="POST" action="#" class="container_modsal">
        <h2 class="gestion-text">
         Ajout d'un salarié
        </h2>
        <div class="form-group">
         <div>
          <label for="nom">
           Nom
          </label>
          <input id="nom" name="nom" type="text" size="40"  required>
         </div>
         <div>
          <label for="prenom">
           Prénom
          </label>
          <input id="prenom" name="prenom" type="text" size="40" required>
         </div>
         <div>
            <label for="matricule">
             Matricule
            </label>
            <input id="matricule" name="matricule" type="text" size="40" required>
           </div>
        </div>
        <div class="form-group">
         <div>
          <label for="datenaissance">
           Date Naissance (YYYY-MM-DD)
          </label>
          <input id="datenaissance" name="datenaissance" type="text" size="40" required>
         </div>
         <div>
          <label for="dateembauche">
           Date Embauche (YYYY-MM-DD)
          </label>
          <input id="dateembauche" name="dateembauche" type="text" size="40" required>
         </div>
         <div>
            <label for="salaire">
             Salaire :
            </label>
            <input id="salaire" name="salaire" type="text" size="40" required>
           </div>
         <div>
          <label for="email">
           Email :
          </label>
          <input id="email" name="email" type="text" size="40" required>
         </div>
        <div class="form-group">
         <div>
          <label for="mdp">
           Mot de Passe Provisoire
          </label>
          <input id="mdp" name="mdp" type="text" size="40" required>
         </div>
         <div>
          <label for="tel">
           Tél
          </label>
          <input id="tel" name="tel" type="text" size="40" required>
         </div>
        </div>
          <input type="submit" value="Valider"  class="envoie-button">
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
