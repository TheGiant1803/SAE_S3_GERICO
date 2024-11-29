<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification salarié</title>
    <link rel="stylesheet" href="../styles/style.css">
    <style>     
        
        
        
  </style>
</head>
<body>
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
            {if $user_admin==1}
            <li class="navtext active"><a class="navtext" href="admin.html">Administration</a></li>
            {/if}
        </ul>
        <div class="navbar-icons">
            <a class="navbar-icons" href="#notifications">
                <img class="notif" src="../assets/notif.png" alt="image de notifications">
            </a>
            <a class="navbar-icons" href="#profil">
                <a href="./logout"><p>Se déconnecter</p></a>
            </a>
        </div>
    </nav>
    
    <div class="container_modsal">
        <h2>
         Modification du salarié
        </h2>
        <div class="form-group">
         <div>
          <label for="nom" class="modsallabel">
           Nom
          </label>
          <input id="nom" type="text" size="40"/>
         </div>
         <div>
          <label for="prenom" class="modsallabel">
           Prénom
          </label>
          <input id="prenom" type="text" size="40"/>
         </div>
         <div>
            <label for="matricule" class="modsallabel">
             Matricule
            </label>
            <input id="matricule" type="text" size="40"/>
           </div>
        </div>
        <div class="form-group">
         <div>
          <label for="date-naissance" class="modsallabel">
           Date Naissance
          </label>
          <input id="date-naissance" type="text" size="40"/>
         </div>
         <div>
          <label for="date-embauche" class="modsallabel">
           Date Embauche
          </label>
          <input id="date-embauche" type="text" size="40"/>
         </div>
         <div>
            <label for="salaire" class="modsallabel">
             Salaire
            </label>
            <input id="salaire" type="text" size="40"/>
           </div>
        </div>
        <div class="form-group">
         <div>
          <label for="email" class="modsallabel">
           Email
          </label>
          <input id="email" type="text" size="40"/>
         </div>
         <div>
          <label for="tel" class="modsallabel">
           Tél
          </label>
          <input id="telep" type="text" size="40"/>
         </div>
        </div>
        <div class="form-actions">
         <button class="reset">
          Réinitialiser
         </button>
         <button>
          Valider
         </button>
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

