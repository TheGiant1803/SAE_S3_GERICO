<?php
/* Smarty version 4.2.1, created on 2024-12-05 10:40:42
  from 'C:\Users\ASUS\OneDrive\Documents\GitHub\SAE_S3_GERICO\test_framework\templates\gestion_des_salaries.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6751832abdc525_66682788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcdf7128ead99865be979328d3a6e438bf84cdc8' => 
    array (
      0 => 'C:\\Users\\ASUS\\OneDrive\\Documents\\GitHub\\SAE_S3_GERICO\\test_framework\\templates\\gestion_des_salaries.tpl',
      1 => 1733395236,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6751832abdc525_66682788 (Smarty_Internal_Template $_smarty_tpl) {
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
                <a href="./logout"><p>Se déconnecter</p></a>
            </a>
        </div>
    </nav>
    </nav>

    <h1>Gestion des salariés</h1>
    <p>Liste des employés :</p>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
            </tr>
        </thead>
        <tbody>
            <!-- Vérification si des employés sont présents -->
            <!-- Utilisation d'une boucle pour afficher les données -->
            <?php if (!empty($_smarty_tpl->tpl_vars['employes']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['employes']->value, 'employe');
$_smarty_tpl->tpl_vars['employe']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['employe']->value) {
$_smarty_tpl->tpl_vars['employe']->do_else = false;
?>
                <tr>
                    <td><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['employe']->value['id_emp'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                    <td><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['employe']->value['nom'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                    <td><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['employe']->value['prenom'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
                <tr>
                    <td colspan="3">Aucun employé trouvé.</td>
                </tr>
            <?php }?>
        </tbody>
    </table>

    <!-- Navigation de la pagination -->
    <div>
        <?php if ($_smarty_tpl->tpl_vars['page']->value > 1) {?>
            <a href="./gestion_des_salaries.html?page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">Précédent</a>
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['page']->value < $_smarty_tpl->tpl_vars['total_pages']->value) {?>
            <a href="./gestion_des_salaries.html?page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
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
</html>

<?php }
}
