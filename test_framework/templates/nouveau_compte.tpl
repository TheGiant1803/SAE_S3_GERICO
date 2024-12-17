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
            <p>Vous êtes déjà inscrit ? <a href="./connexion.html">Se connecter</a></p>
<form method="POST" action="./nouveau_compte.html">
                <label for="matricule">MATRICULE</label>
                <input type="text" id="matricule" name="matricule" value="{$post->matricule|default:''}" required>
                {if isset($errors.matricule)}
                    <span class="error-message">{$errors.matricule}</span>
                {/if}

                <label for="email">E-MAIL</label>
                <input type="email" id="email" name="email" value="{$post->email|default:''}" required>
                {if isset($errors.email)}
                    <span class="error-message">{$errors.email}</span>
                {/if}

                <label for="provisoire">MOT DE PASSE PROVISOIRE</label>
                <input type="password" id="provisoire" name="provisoire" required>
                {if isset($errors.password)}
                    <span class="error-message">{$errors.password}</span>
                {/if}

                <label for="password">NOUVEAU MOT DE PASSE</label>
                <input type="password" id="password" name="password" required>
                {if isset($errors.password)}
                    <span class="error-message">{$errors.password}</span>
                {/if}

                <label for="confirm_password">CONFIRMATION DU MOT DE PASSE</label>
                <input type="password" name="confirm_password" id="confirm_password" required>

                {if isset($errors.confirm_password)}
                    <span class="error-message">{$errors.confirm_password}</span>
                {/if}
                <input type="submit" value="S'inscrire">
            </form>
            
        </div>
    </div>
    <footer class="foot_bar bar">
        <div class="foot_titre">@2024 Gerico. Transport</div>
        <ul class="foot_ul_text">
            <li class="foot_text"><a class="foot_text" href="#rgpd">Politique RGPD</a></li>
            <li class="foot_text"><a class="foot_text" href="cookies.html">Gestion des cookies</a></li>
            <li class="foot_text"><a class="foot_text" href="./mentions.html">Mentions légales</a></li>
        </ul>
    </footer>
</body>
</html>