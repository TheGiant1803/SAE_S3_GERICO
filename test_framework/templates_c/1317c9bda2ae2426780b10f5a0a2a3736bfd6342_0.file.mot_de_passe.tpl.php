<?php
/* Smarty version 4.2.1, created on 2024-12-05 08:58:47
  from 'C:\Users\carpe\SAE_S3_GERICO\test_framework\templates\mot_de_passe.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_67516b476f9347_95879670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1317c9bda2ae2426780b10f5a0a2a3736bfd6342' => 
    array (
      0 => 'C:\\Users\\carpe\\SAE_S3_GERICO\\test_framework\\templates\\mot_de_passe.tpl',
      1 => 1733388898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67516b476f9347_95879670 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mot de passe oublié</title>
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
                <h1>Mot de passe oublié ?</h1>
                <p>Vous recevrez un e-mail avec toutes les informations pour récupérer votre mot de passe.</p>
                
                <form action="#" method="post">
                    <label for="email">EMAIL</label>
                    <input type="text" id="email" name="email" required="required">

                    <button type="submit">Envoyer l'email</button>
                </form>
                <a href="./connexion.html">Retour à la connexion</a>
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
