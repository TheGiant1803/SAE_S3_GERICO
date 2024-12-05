<?php
/* Smarty version 4.2.1, created on 2024-12-05 09:28:55
  from 'C:\Users\carpe\SAE_S3_GERICO\test_framework\templates\confirmation_mail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_675172577e4a12_27726888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ee4d5a1fb3c3788d79543815563193176175821' => 
    array (
      0 => 'C:\\Users\\carpe\\SAE_S3_GERICO\\test_framework\\templates\\confirmation_mail.tpl',
      1 => 1733390908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675172577e4a12_27726888 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Confirmation un mail</title>
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
                <p>Un mail vous a été envoyé avec les instructions à suivre</p>
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
