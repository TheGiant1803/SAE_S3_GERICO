<?php
/* Smarty version 4.2.1, created on 2024-12-05 13:55:14
  from 'C:\Users\ASUS\OneDrive\Documents\GitHub\SAE_S3_GERICO\test_framework\templates\admin_validation_congés.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6751b0c256e7e5_68278729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38f6260d9c16c9d9b2381aa362ced61569608e46' => 
    array (
      0 => 'C:\\Users\\ASUS\\OneDrive\\Documents\\GitHub\\SAE_S3_GERICO\\test_framework\\templates\\admin_validation_congés.tpl',
      1 => 1733406910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6751b0c256e7e5_68278729 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation de congés</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link href="C:\Users\Lenny\SAE3\SAE_S3_GERICO\assets\chau-philomene-one" rel="stylesheet">
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

    <h1>Liste des Demandes de Congé</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID Demande</th>
                <th>Nom Employé</th>
                <th>Prénom Employé</th>
                <th>Motif</th>
                <th>Durée</th>
                <th>Statut</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['demandes_conge']->value, 'demande');
$_smarty_tpl->tpl_vars['demande']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['demande']->value) {
$_smarty_tpl->tpl_vars['demande']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['demande']->value['id_dcp'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['demande']->value['nom_emp'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['demande']->value['prenom_emp'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['demande']->value['motif'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['demande']->value['duree'];?>
 jours</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['demande']->value['statut'];?>
</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>

    <div>
        <?php if ($_smarty_tpl->tpl_vars['page']->value > 1) {?>
            <a href="/admin_validation_conges.html?page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">Précédent</a>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['page']->value < $_smarty_tpl->tpl_vars['total_pages']->value) {?>
            <a href="/admin_validation_conges.html?page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
">Suivant</a>
        <?php }?>
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
</html><?php }
}
