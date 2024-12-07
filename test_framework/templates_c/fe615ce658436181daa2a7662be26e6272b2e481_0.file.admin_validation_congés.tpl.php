<?php
/* Smarty version 4.2.1, created on 2024-12-07 13:19:32
  from 'C:\Users\Antoine\OneDrive\Bureau\But\BUT2\S3\SAE_S3_GERICO\test_framework\templates\admin_validation_congés.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_67544b64e337f9_55981688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe615ce658436181daa2a7662be26e6272b2e481' => 
    array (
      0 => 'C:\\Users\\Antoine\\OneDrive\\Bureau\\But\\BUT2\\S3\\SAE_S3_GERICO\\test_framework\\templates\\admin_validation_congés.tpl',
      1 => 1733577570,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67544b64e337f9_55981688 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation de congés</title>
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

    <main class="main_valcong">
        <h1 class="gestion-text">Validation de congés</h1>

    <p>Liste des demandes de congés :</p>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Cause</th>
                <th>Durée</th>
                <th>Statut</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($_smarty_tpl->tpl_vars['conges']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['conges']->value, 'conge');
$_smarty_tpl->tpl_vars['conge']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['conge']->value) {
$_smarty_tpl->tpl_vars['conge']->do_else = false;
?>
                <tr>
                    <td><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['conge']->value['id_dcp'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                    <td><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['conge']->value['nom'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                    <td><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['conge']->value['prenom'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                    <td><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['conge']->value['motif'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                    <td><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['conge']->value['duree'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['conge']->value['valid'] === NULL) {?>
                            <form action="" method="post">
                            <div>
                                <input type="hidden" id="id_dcp" name="id_dcp" value="<?php echo $_smarty_tpl->tpl_vars['conge']->value['id_dcp'];?>
">
                                <input type="hidden" id="page" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
">
                                <label for="accepte">Acceptée</label>
                                <input type="radio" id="accepte" name="demande<?php echo $_smarty_tpl->tpl_vars['conge']->value['id_dcp'];?>
" value="accepte">
                                <label for="accepte">Refusée</label>
                                <input type="radio" id="refuse" name="demande<?php echo $_smarty_tpl->tpl_vars['conge']->value['id_dcp'];?>
" value="refuse">
                            </div>
                                <input type="submit" name="submit_demande<?php echo $_smarty_tpl->tpl_vars['conge']->value['id_dcp'];?>
" value ="Confirmer">
                            </form>
                        <?php } else { ?>
                            <span class="statut">
                                <?php if ($_smarty_tpl->tpl_vars['conge']->value['valid'] === 1) {?>Accepté
                                <?php } elseif ($_smarty_tpl->tpl_vars['conge']->value['valid'] === 0) {?>Refusé<?php }?>
                                </span>
                        <?php }?>
                    </td>

                </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
                <tr>
                    <td colspan="5">Aucun employé trouvé.</td>
                </tr>
            <?php }?>
        </tbody>
    </table>

    <div>
        <?php if ($_smarty_tpl->tpl_vars['page']->value > 1) {?>
            <a href="./admin_validation_congés.html?page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">Précédent</a>
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['page']->value < $_smarty_tpl->tpl_vars['total_pages']->value) {?>
            <a href="./admin_validation_congés.html?page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
">Suivant</a>
        <?php }?>
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
</html><?php }
}
