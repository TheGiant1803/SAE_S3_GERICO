<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Connexion</title>
        <link
            rel="stylesheet"
            href="../assets/chau-philomene-one/ChauPhilomeneOne-Regular.ttf">
        <link rel="stylesheet" href="../styles/style.css">
            <link rel="icon" type="image/png" href="../../assets/ptitlogo.png">

    </head>
    <body>
        <nav class="bar"></nav>
        <div class="header">
            <img src="../assets/logo.png" alt="Gerico Logo" height="80">
        </div>
        <div class="login-container">
            <div class="login-box">
                <h1>Connexion</h1>
                <p>Vous n'êtes pas encore inscrit ?
                    <a href="./nouveau_compte.html">S'inscrire</a>
                </p>
                <form action="#" method="post">
                    <label for="email">MATRICULE / EMAIL</label>
                    <input type="text" id="email" name="email" required="required">

                    <label for="password">MOT DE PASSE</label>
                    <input type="password" id="password" name="password" required="required">

                    <button type="submit">Connexion</button>
                </form>
                <a href="./mot_de_passe.html">Vous avez oublié votre mot de passe ?</a>
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
