<?php
/* Smarty version 4.2.1, created on 2024-12-19 13:51:16
  from 'C:\Users\Antoine\OneDrive\Bureau\But\BUT2\S3\SAE_S3_GERICO\test_framework\templates\gestion_des_salaries.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_676424d42d5de8_64519641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1915eb93e8518a712afac5fd94ea68d5166f4f0' => 
    array (
      0 => 'C:\\Users\\Antoine\\OneDrive\\Bureau\\But\\BUT2\\S3\\SAE_S3_GERICO\\test_framework\\templates\\gestion_des_salaries.tpl',
      1 => 1734430588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_676424d42d5de8_64519641 (Smarty_Internal_Template $_smarty_tpl) {
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

    <div class="centrer-suivant-preced">
         <div class="gestion-fiches">
            
            <ul class="ajout_fiche_paie">
                <div class="gestion-text">
                    Gestion des salariés
                    <a href="./ajoutSalarie.html"><p>Ajouter</p></a>
                </div>
                <?php if (!empty($_smarty_tpl->tpl_vars['employes']->value)) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['employes']->value, 'employe');
$_smarty_tpl->tpl_vars['employe']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['employe']->value) {
$_smarty_tpl->tpl_vars['employe']->do_else = false;
?>
                    <li>
                        <div class="list-item">
                            <span class="info"><?php echo $_smarty_tpl->tpl_vars['employe']->value['nom'];?>
 <?php echo $_smarty_tpl->tpl_vars['employe']->value['prenom'];?>
 - Matricule <?php echo $_smarty_tpl->tpl_vars['employe']->value['id_emp'];?>
</span>
                            <span class="date"> <a href="./modification-<?php echo $_smarty_tpl->tpl_vars['employe']->value['id_emp'];?>
.html">MODIFIER</a> | <a href="./suppression-<?php echo $_smarty_tpl->tpl_vars['employe']->value['id_emp'];?>
.html" onclick="return confirmSuppression(event)">SUPPRIMER</a> </span>
                        </div>
                        <?php echo '<script'; ?>
>
                            function confirmSuppression(event) {
                                const message = "Êtes-vous sûr de vouloir supprimer ? Cette action est irréversible.";
                                if (!confirm(message)) {
                                    event.preventDefault();
                                    return false;
                                }
                                return true;
                            }
                        <?php echo '</script'; ?>
>
                    </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php } else { ?>
                <li>
                    <span class="info">Aucun employé trouvé.</span>
                </li>
                <?php }?>
            </ul>
        </div>
        
        <!-- Navigation de la pagination -->
        <div class="separation-des-boutons">
            <?php if ($_smarty_tpl->tpl_vars['page']->value > 1) {?>
                <a class="apparance-des-liens" href="./gestion_des_salaries.html?page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">Précédent</a>
            <?php }?>
            
            <?php if ($_smarty_tpl->tpl_vars['page']->value < $_smarty_tpl->tpl_vars['total_pages']->value) {?>
                <a class="apparance-des-liens" href="./gestion_des_salaries.html?page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
">Suivant</a>
            <?php }?>
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
