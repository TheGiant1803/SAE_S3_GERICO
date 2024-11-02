<?php
/* Smarty version 4.2.1, created on 2024-10-21 08:57:55
  from 'C:\Users\Antoine\OneDrive\Bureau\But\BUT2\S3\SAE_S3_GERICO\test_framework\templates\gestion_des_salaries.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_67161793e99df4_59793278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1915eb93e8518a712afac5fd94ea68d5166f4f0' => 
    array (
      0 => 'C:\\Users\\Antoine\\OneDrive\\Bureau\\But\\BUT2\\S3\\SAE_S3_GERICO\\test_framework\\templates\\gestion_des_salaries.tpl',
      1 => 1729501073,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67161793e99df4_59793278 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des salariés</title>
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
            <li class="navtext"><a class="navtext" href="/">Accueil</a></li>
            <li class="navtext"><a class="navtext" href="congé1.html">Gestion des congés</a></li>
            <li class="navtext"><a class="navtext" href="Fiche_De_Paie.html">Consulter vos fiches de paie</a></li>
            <li class="navtext active"><a class="navtext" href="admin.html">Administration</a></li>
        </ul>
        <div class="navbar-icons">
            <a class="navbar-icons" href="#notifications">
                <img class="notif" src="../assets/notif.png" alt="image de notifications">
            </a>
            <a class="navbar-icons" href="#profil">
                <img class="profile" src="../assets/profile.png" alt="image du profile">
            </a>
        </div>
    </nav>
    </nav>

    
    <ul class="ajout_fiche_paie">
    <div class="gestion-text">
        Gestion des salariés<i class="fas fa-plus"></i>
    </div> 
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['employes']->value, 'employe');
$_smarty_tpl->tpl_vars['employe']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['employe']->value) {
$_smarty_tpl->tpl_vars['employe']->do_else = false;
?>            
    <li>
        <div class="list-item">
            <span class="info"><?php echo $_smarty_tpl->tpl_vars['employe']->value['nom_emp'];?>
 <?php echo $_smarty_tpl->tpl_vars['employe']->value['prenom_emp'];?>
 - Matricule <?php echo $_smarty_tpl->tpl_vars['employe']->value['id_emp'];?>
</span>
            <span class="date">
                <a href="modifier.php?id=<?php echo $_smarty_tpl->tpl_vars['employe']->value['id_emp'];?>
">MODIFIER</a> | 
                <a href="supprimer.php?id=<?php echo $_smarty_tpl->tpl_vars['employe']->value['id_emp'];?>
">SUPPRIMER</a>
            </span>
        </div>
    </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
