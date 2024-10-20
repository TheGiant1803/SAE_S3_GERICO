<!DOCTYPE html>
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
            <p>Vous êtes déjà inscrit ? <a href="#">Se connecter</a></p>
            <form action="#">
                <label for="matricule">MATRICULE</label>
                <input type="text" name="matricule" required>
                <label for="email">E-MAIL</label>
                <input type="email" name="email" required>
                <label for="password">MOT DE PASSE</label>
                <input type="password" name="password" required>
                <label for="confirm_password">CONFIRMATION DU MOT DE PASSE</label>
                <input type="password" name="confirm_password" required>
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
</html>