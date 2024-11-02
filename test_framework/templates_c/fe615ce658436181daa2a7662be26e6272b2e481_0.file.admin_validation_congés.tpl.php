<?php
/* Smarty version 4.2.1, created on 2024-10-24 08:31:51
  from 'C:\Users\Antoine\OneDrive\Bureau\But\BUT2\S3\SAE_S3_GERICO\test_framework\templates\admin_validation_congés.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_671a05f7d64be2_24448570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe615ce658436181daa2a7662be26e6272b2e481' => 
    array (
      0 => 'C:\\Users\\Antoine\\OneDrive\\Bureau\\But\\BUT2\\S3\\SAE_S3_GERICO\\test_framework\\templates\\admin_validation_congés.tpl',
      1 => 1729758708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_671a05f7d64be2_24448570 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation de congés</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link href="C:\Users\Lenny\SAE3\SAE_S3_GERICO\assets\chau-philomene-one" rel="stylesheet">
</head>
<body>
    <nav class="bar"></nav> <!-- C'st la ligne bleu foncé tout en haut-->
    
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
            <li class="navtext active"><a class="navtext" href="admin.html">Administration</a></li>
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

    <main class="main_valcong">
        <h1 class="titre">Validation de congés</h1>

        <div class="buttons">
            <label for="nb-elements">Afficher </label>
            <input type="number" id="nb-elements" value="5" min="1" />
            <label for="nb-elements">éléments</label>
            <button class="btn-classique" onclick="afficherElements()">Afficher</button>
        </div>
        
        <div class="table-container">
        <table id="table">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date début</th>
                    <th>Date fin</th>
                    <th>Cause</th>
                    <th>Durée</th>
                    <th>Statut</th>
                </tr>
            </thead>
            <tbody>
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['conges']->value, 'conge');
$_smarty_tpl->tpl_vars['conge']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['conge']->value) {
$_smarty_tpl->tpl_vars['conge']->do_else = false;
?>   
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['conge']->value['id_dcp'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['conge']->value['nom_emp'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['conge']->value['prenom_emp'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['conge']->value['date_dcp'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['conge']->value['date_fin'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['conge']->value['cause_dcp'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['conge']->value['duree_dcp']*12;?>
h</td>
                    <td>
                        <button class="btn-accepter" onclick="changerStatut(this, 'accepté')">Accepter</button>
                        <button class="btn-refuser" onclick="changerStatut(this, 'refusé')">Refuser</button>
                    </td>
                </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
        </div>
    
        <!-- Boutons -->
        <div class="buttons">
            <button class="btn-classique" onclick="exporterCSV()">Exporter le tableau</button>
        </div>
    
        <?php echo '<script'; ?>
>
            // Fonction pour exporter le tableau en CSV
            function exporterCSV() {
                let table = document.getElementById("table");
                let rows = table.rows;
                let csvContent = "";
    
                for (let i = 0; i < rows.length; i++) {
                    let cols = rows[i].querySelectorAll("td, th");
                    let rowContent = [];
                    cols.forEach(function(col) {
                        rowContent.push(col.textContent);
                    });
                    csvContent += rowContent.join(",") + "\n";
                }
    
                // Télécharger le fichier CSV
                let blob = new Blob([csvContent], { type: "text/csv" });
                let link = document.createElement("a");
                link.href = URL.createObjectURL(blob);
                link.download = "tableau.csv";
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            }

            // Fonction pour changer le statut avec les boutons "Accepter" et "Refuser"
            function changerStatut(button, statut) {
                let cellule = button.parentElement;
                cellule.innerHTML = statut.charAt(0).toUpperCase() + statut.slice(1);  // Remplace les boutons par le statut (Accepté ou Refusé)
                // Enregistrer le statut dans le tableau
                let row = button.closest('tr');
                let rowIndex = row.rowIndex - 1; // Enlever l'en-tête
                statuts[rowIndex] = statut; // Enregistre le statut correspondant à la ligne
            }
            
            // Fonction pour changer le statut
            function changerStatut(button, statut) {
                let cell = button.parentNode; // Cellule parent du bouton
                let statusText = statut.charAt(0).toUpperCase() + statut.slice(1); // Formate le texte (Accepté ou Refusé)
                // Remplace le contenu de la cellule par le statut et ajoute le bouton "Reset"
                cell.innerHTML = statusText + `<button class="btn-reset" onclick="resetStatut(this)">Reset</button>`;
            }

            // Fonction pour réinitialiser le statut
            function resetStatut(button) {
                let cell = button.parentNode; // Cellule parent du bouton Reset
                // Remet les boutons "Accepter" et "Refuser"
                cell.innerHTML = `<button class="btn-accepter" onclick="changerStatut(this, 'accepté')">Accepter</button><button class="btn-refuser" onclick="changerStatut(this, 'refusé')">Refuser</button>`;
            }
        <?php echo '</script'; ?>
>
    
    </main>
    
    <footer class="foot_bar bar">
        <div class="foot_titre">@2024 Gerico. Transport</div>
        <ul class="foot_ul_text">
            <li class="foot_text"><a class="foot_text" href="#rgpd">Politique RGPD</a></li>
            <li class="foot_text"><a class="foot_text" href="#cookies">Gestion des cookies</a></li>
            <li class="foot_text"><a class="foot_text" href="#mentions">Mentions légales</a></li>
        </ul>
    </footer>
    
</body>
</html><?php }
}
