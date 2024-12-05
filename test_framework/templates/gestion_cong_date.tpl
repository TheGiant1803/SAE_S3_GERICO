<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion date de congés</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/style.css">
  </head>
  <body>

    <nav>
      <nav class="bar"></nav> <!-- C'est la ligne bleu foncé touten haut-->
  
  <nav class="navbar">
      <div class="logo-container">
          <a href="./">
              <img class="logo" src="../assets/logo.png" alt="image de logo">
          </a>
      </div>
      <ul class="navbar_text">
          <li class="navtext"><a class="navtext" href="./">Accueil</a></li>
          <li class="navtext active"><a class="navtext" href="congé1.html">Gestion des congés</a></li>
          <li class="navtext"><a class="navtext" href="Fiche_De_Paie.html">Consulter vos fiches de paie</a></li>
          {if $user_admin==1}
            <li class="navtext"><a class="navtext" href="admin.html">Administration</a></li>
            {/if}
      </ul>
      <div class="navbar-icons">
          <a class="navbar-icons" href="#notifications">
              <img class="notif" src="../assets/notif.png" alt="image de notifications">
          </a>
          <a class="navbar-icons" href="#profil">
              <img class="profile" src="../assets/profile.png" alt="image du profile">
          </a>
      </div>
  </nav>
  </nav>

    <div class="container-cong">
        <h1>Demande de Congés :</h1>
        
        <form method="post" action="" class="form-cong">
          <div class="form-group">
            <label for="date_cong">Date :</label>
           <!-- min -> à gérer en php ou js--> 
            <input type="date" class="form-control date_cong" min="" id="date_cong" name="date_cong" required>
          </div>
          <div class="form-group">
            <label for="duration">Sélectionnez la durée :</label>
              <select class="form-select" id="duration" name="duration" required>
                <option selected disabled>-</option>
                <option value="matin">Matin</option>
                <option value="après_midi">Après-midi</option>
                <option value="Journée">Journée complète</option>
              </select>
          </div>
          <div class="form-group">
            <label for="motif">Motif du congé :</label>
            <input type="text" class="form-control motif" id="motif" name="motif" required>
          </div>
          <input type="submit" value ="Envoyer la demande" class="submit">
        </form>
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