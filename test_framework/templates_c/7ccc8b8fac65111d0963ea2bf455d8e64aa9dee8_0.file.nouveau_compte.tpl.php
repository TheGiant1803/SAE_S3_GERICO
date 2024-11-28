<?php
/* Smarty version 4.2.1, created on 2024-11-28 13:19:43
  from 'C:\Users\carpe\SAE_S3_GERICO\test_framework\templates\nouveau_compte.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_67486def75c777_60009272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ccc8b8fac65111d0963ea2bf455d8e64aa9dee8' => 
    array (
      0 => 'C:\\Users\\carpe\\SAE_S3_GERICO\\test_framework\\templates\\nouveau_compte.tpl',
      1 => 1732799978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67486def75c777_60009272 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un nouveau compte</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <nav class="bar"></nav>
    <div class="header">
        <img src="../assets/logo.png" alt="Gerico Logo" height="80">
    </div>
    
    <div class="container">
        <div class="form-container">
            <h2>Créer un nouveau compte</h2>
            <p>Vous êtes déjà inscrit ? <a href="./connexion.html">Se connecter</a></p>
<form method="POST" action="./nouveau_compte.html">
                <label for="matricule">MATRICULE</label>
                <input type="text" id="matricule" name="matricule" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post']->value->matricule ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" required>
                <?php if ((isset($_smarty_tpl->tpl_vars['errors']->value['matricule']))) {?>
                    <span class="error-message"><?php echo $_smarty_tpl->tpl_vars['errors']->value['matricule'];?>
</span>
                <?php }?>

                <label for="email">E-MAIL</label>
                <input type="email" id="email" name="email" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post']->value->email ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" required>
                <?php if ((isset($_smarty_tpl->tpl_vars['errors']->value['email']))) {?>
                    <span class="error-message"><?php echo $_smarty_tpl->tpl_vars['errors']->value['email'];?>
</span>
                <?php }?>

                <label for="provisoire">MOT DE PASSE PROVISOIRE</label>
                <input type="password" id="provisoire" name="provisoire" required>
                <?php if ((isset($_smarty_tpl->tpl_vars['errors']->value['password']))) {?>
                    <span class="error-message"><?php echo $_smarty_tpl->tpl_vars['errors']->value['password'];?>
</span>
                <?php }?>

                <label for="password">NOUVEAU MOT DE PASSE</label>
                <input type="password" id="password" name="password" required>
                <?php if ((isset($_smarty_tpl->tpl_vars['errors']->value['password']))) {?>
                    <span class="error-message"><?php echo $_smarty_tpl->tpl_vars['errors']->value['password'];?>
</span>
                <?php }?>

                <label for="confirm_password">CONFIRMATION DU MOT DE PASSE</label>
                <input type="password" name="confirm_password" id="confirm_password" required>

                <?php if ((isset($_smarty_tpl->tpl_vars['errors']->value['confirm_password']))) {?>
                    <span class="error-message"><?php echo $_smarty_tpl->tpl_vars['errors']->value['confirm_password'];?>
</span>
                <?php }?>
                <input type="submit" value="S'inscrire">
            </form>
            
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
</html><?php }
}
