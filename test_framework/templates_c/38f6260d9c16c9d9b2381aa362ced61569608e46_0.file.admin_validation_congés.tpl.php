<?php
/* Smarty version 4.2.1, created on 2024-12-06 15:59:17
  from 'C:\Users\ASUS\OneDrive\Documents\GitHub\SAE_S3_GERICO\test_framework\templates\admin_validation_congés.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_67531f5562ed58_17657789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38f6260d9c16c9d9b2381aa362ced61569608e46' => 
    array (
      0 => 'C:\\Users\\ASUS\\OneDrive\\Documents\\GitHub\\SAE_S3_GERICO\\test_framework\\templates\\admin_validation_congés.tpl',
      1 => 1733500752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67531f5562ed58_17657789 (Smarty_Internal_Template $_smarty_tpl) {
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

    <h1>Gestion des salariés</h1>

    <p>Liste des employés :</p>
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
                        <?php if ($_smarty_tpl->tpl_vars['conge']->value['valid'] == NULL) {?>
                            <button class="btn-accepter" onclick="console.log('Bouton accepter cliqué')">Accepter</button>
                            <button class="btn-refuser" onclick="changerStatut(this, 'refusé')">Refuser</button>
                        <?php } else { ?>
                            <span class="statut"><?php if ($_smarty_tpl->tpl_vars['conge']->value['valid'] == 'accepté') {?>Accepté<?php } elseif ($_smarty_tpl->tpl_vars['conge']->value['valid'] == 'refusé') {?>Refusé<?php }?></span>
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

    
    <?php echo '<script'; ?>
>
        function changerStatut(button, action) {
            const row = button.closest('tr');
            const id_dcp = row.querySelector('td:first-child').innerText; // Récupère l'ID du congé

            console.log('Bouton cliqué');
            console.log('ID:', id_dcp, 'Action:', action);

            fetch('./admin_validation_congés.html', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: 'id_dcp=' + id_dcp + '&action=' + action
            })
            .then(response => {
                console.log('Réponse:', response);
                return response.json();
            })
            .then(data => {
                console.log('Données reçues:', data);
                if (data.success) {
                    const statutCell = row.querySelector('td:last-child');
                    statutCell.innerHTML = '<span class="statut">' + action.charAt(0).toUpperCase() + action.slice(1) + '</span>';
                } else {
                    alert('Erreur lors de la mise à jour.');
                }
            })
            .catch(error => console.error('Erreur AJAX:', error));
        }
    <?php echo '</script'; ?>
>
    

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
            <li class="foot_text"><a class="foot_text" href="#cookies">Gestion des cookies</a></li>
            <li class="foot_text"><a class="foot_text" href="#mentions">Mentions légales</a></li>
        </ul>
    </footer>
    
</body>
</html><?php }
}
