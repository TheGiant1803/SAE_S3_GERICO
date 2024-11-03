<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion date de congés</title>
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
          <li class="navtext"><a class="navtext" href="./">Accueil</a></li>
          <li class="navtext active"><a class="navtext" href="congé1.html">Gestion des congés</a></li>
          <li class="navtext"><a class="navtext" href="Fiche_De_Paie.html">Consulter vos fiches de paie</a></li>
          <li class="navtext"><a class="navtext" href="admin.html">Administration</a></li>
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


    <div id="container">
      <div id="header">
        <div id="monthDisplay"></div>
        <div>
          <button id="backButton" class="btn_calendar">Précédent</button>
          <button id="nextButton" class="btn_calendar">Suivant</button>
        </div>
      </div>

      <div id="weekdays">
        <div>Lundi</div>
        <div>Mardi</div>
        <div>Mercredi</div>
        <div>Jeudi</div>
        <div>Vendredi</div>
        <div>Samedi</div>
        <div>Dimanche</div>
      </div>

      <div id="calendar"></div>
    </div>
    <div id="newEventModal">
      <h2>Demande Congés</h2>

      <input id="eventTitleInput" placeholder="Motif" />

      <button id="saveButton">Valider</button>
      <button id="cancelButton">Annuler</button>
    </div>

    <div id="deleteEventModal">
      <h2>Event</h2>

      <p id="eventText">En attente :</p>

      <button id="deleteButton">Delete</button>
      <button id="closeButton">Close</button>
    </div>

    <div id="modalBackDrop"></div>

    <footer class="foot_bar bar">
      <div class="foot_titre">@2024 Gerico. Transport</div>
      <ul class="foot_ul_text">
          <li class="foot_text"><a class="foot_text" href="#rgpd">Politique RGPD</a></li>
          <li class="foot_text"><a class="foot_text" href="#cookies">Gestion des cookies</a></li>
          <li class="foot_text"><a class="foot_text" href="#mentions">Mentions légales</a></li>
      </ul>
  </footer>

    <script src="../script/calendar.js"></script>
  </body>
</html>