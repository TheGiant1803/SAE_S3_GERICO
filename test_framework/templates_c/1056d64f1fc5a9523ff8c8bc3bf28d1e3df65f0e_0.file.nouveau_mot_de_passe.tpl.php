<?php
/* Smarty version 4.2.1, created on 2024-12-05 10:01:21
  from 'C:\Users\carpe\SAE_S3_GERICO\test_framework\templates\nouveau_mot_de_passe.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_675179f16d3d67_56088818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1056d64f1fc5a9523ff8c8bc3bf28d1e3df65f0e' => 
    array (
      0 => 'C:\\Users\\carpe\\SAE_S3_GERICO\\test_framework\\templates\\nouveau_mot_de_passe.tpl',
      1 => 1733392837,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675179f16d3d67_56088818 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nouveau Mot de Passe</title>
        <link
            rel="stylesheet"
            href="../assets/chau-philomene-one/ChauPhilomeneOne-Regular.ttf">
        <link rel="stylesheet" href="../styles/style.css">
    </head>
    <body>
        <nav class="bar"></nav>
        <div class="header">
            <img src="../assets/logo.png" alt="Gerico Logo" height="80">
        </div>
        <div class="login-container">
            <div class="login-box">
                <h1>Changement de mot de passe </h1>
                <form action="#" method="post">
                    <label for="email">EMAIL</label>
                    <input type="text" id="email" name="email" required="required">

                    <label for="password">MOT DE PASSE</label>
                    <input type="password" id="password" name="password" required="required">


                    <label for="password">CONFIRMATION DU MOT DE PASSE</label>
                    <input type="password" id="confirm_password" name="confirm_password" required="required">

                    <button type="submit">Changer de mot de passe</button>
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
</html>
<?php }
}
