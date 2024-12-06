<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation de congés</title>
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
            <li class="navtext "><a class="navtext" href="./">Accueil</a></li>
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
                <a href="./logout"><p class="se-deconnecter">Se déconnecter</p></a>
            </a>
        </div>
    </nav>
    </nav>

    <h1>Gestion des salariés</h1>

    <p>Liste des employés :</p>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Cause</th>
                <th>Durée</th>
                <th>Statut</th>
            </tr>
        </thead>
        <tbody>
            {if !empty($conges)}
                {foreach from=$conges item=conge}
                <tr>
                    <td>{$conge.id_dcp|escape}</td>
                    <td>{$conge.nom|escape}</td>
                    <td>{$conge.prenom|escape}</td>
                    <td>{$conge.motif|escape}</td>
                    <td>{$conge.duree|escape}</td>
                    <td>
                        {if $conge.valid == NULL}
                            <button class="btn-accepter" onclick="console.log('Bouton accepter cliqué')">Accepter</button>
                            <button class="btn-refuser" onclick="changerStatut(this, 'refusé')">Refuser</button>
                        {else}
                            <span class="statut">{if $conge.valid == 'accepté'}Accepté{elseif $conge.valid == 'refusé'}Refusé{/if}</span>
                        {/if}
                    </td>

                </tr>
                {/foreach}
            {else}
                <tr>
                    <td colspan="5">Aucun employé trouvé.</td>
                </tr>
            {/if}
        </tbody>
    </table>

    {literal}
    <script>
        function changerStatut(button, action) {
            const row = button.closest('tr');
            const id_dcp = row.querySelector('td:first-child').innerText; // Récupère l'ID du congé

            console.log('Bouton cliqué');
            console.log('ID:', id_dcp, 'Action:', action);

            fetch('./admin_validation_congés.html', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: 'id_dcp=' + id_dcp + '&action=' + action
            })
            .then(response => {
                console.log('Réponse:', response);
                return response.json();
            })
            .then(data => {
                console.log('Données reçues:', data);
                if (data.success) {
                    const statutCell = row.querySelector('td:last-child');
                    statutCell.innerHTML = '<span class="statut">' + action.charAt(0).toUpperCase() + action.slice(1) + '</span>';
                } else {
                    alert('Erreur lors de la mise à jour.');
                }
            })
            .catch(error => console.error('Erreur AJAX:', error));
        }
    </script>
    {/literal}

    <div>
        {if $page > 1}
            <a href="./admin_validation_congés.html?page={$page-1}">Précédent</a>
        {/if}
        
        {if $page < $total_pages}
            <a href="./admin_validation_congés.html?page={$page+1}">Suivant</a>
        {/if}
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