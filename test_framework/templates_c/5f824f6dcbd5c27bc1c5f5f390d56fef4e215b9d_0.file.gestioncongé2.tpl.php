<?php
/* Smarty version 4.2.1, created on 2024-12-06 15:13:18
  from 'C:\Users\cheva\OneDrive\Bureau\Cours\SEMESTRE 3\SAE web\SAE_S3_GERICO\test_framework\templates\gestioncongé2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6753148e8eeb64_19205721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f824f6dcbd5c27bc1c5f5f390d56fef4e215b9d' => 
    array (
      0 => 'C:\\Users\\cheva\\OneDrive\\Bureau\\Cours\\SEMESTRE 3\\SAE web\\SAE_S3_GERICO\\test_framework\\templates\\gestioncongé2.tpl',
      1 => 1733497951,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6753148e8eeb64_19205721 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes demandes de congés</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link href="C:\Users\Lenny\SAE3\SAE_S3_GERICO\assets\chau-philomene-one">
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
            <li class="navtext active"><a class="navtext" href="congé1.html">Gestion des congés</a></li>
            <li class="navtext"><a class="navtext" href="Fiche_De_Paie.html">Consulter vos fiches de paie</a></li>
            <?php if ($_smarty_tpl->tpl_vars['user_admin']->value == 1) {?>
            <li class="navtext"><a class="navtext" href="admin.html">Administration</a></li>
            <?php }?>
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
    <main>
        <h1 class="gestion-text">Mes demandes de congés</h1>

        <div class="buttons">
            <label for="nb-elements">Afficher </label>
            <input type="number" id="nb-elements" value="5" min="1" />
            <label for="nb-elements">éléments</label>
            <button class="btn-classique">Afficher</button>
        </div>
        
        <div class="table-container">
        <table id="table">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Date début</th>
                    <th>Date retour</th>
                    <th>Cause</th>
                    <th>Durée</th>
                    <th>Statut</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['demande_cp']->value, 'demande');
$_smarty_tpl->tpl_vars['demande']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['demande']->value) {
$_smarty_tpl->tpl_vars['demande']->do_else = false;
?> 
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['demande']->value['id_dcp'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['demande']->value['date_dcp'];?>
</td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['demande']->value['date_retour'];?>

                    </td>  
                    <td><?php echo $_smarty_tpl->tpl_vars['demande']->value['motif'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['demande']->value['duree']/2;?>
 jour(s)</td>
                    <td>            
                        <?php if ($_smarty_tpl->tpl_vars['demande']->value['valid'] == null) {?>
                            En attente
                        <?php } elseif ($_smarty_tpl->tpl_vars['demande']->value['valid'] == 0) {?>
                            Refusé
                        <?php } elseif ($_smarty_tpl->tpl_vars['demande']->value['valid'] == 1) {?>
                            Accepté
                        <?php }?>
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
            <button class="btn-classique" onclick="ajouterLigne()">Ajouter une ligne</button>
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
    
            // Fonction pour ajouter une ligne au tableau
            function ajouterLigne() {
                let table = document.getElementById("table").getElementsByTagName("tbody")[0];
                let rowCount = table.rows.length + 1; // Pour numéroter les lignes automatiquement
                let newRow = table.insertRow();
    
                // Créer des cellules et leur contenu
                let cell1 = newRow.insertCell(0);
                let cell2 = newRow.insertCell(1);
                let cell3 = newRow.insertCell(2);
                let cell4 = newRow.insertCell(3);
                let cell5 = newRow.insertCell(4);
                let cell6 = newRow.insertCell(5);
    
                cell1.textContent = rowCount;
                cell2.textContent = "2024-01-05"; // Exemple de date
                cell3.textContent = "2024-01-06";
                cell4.textContent = "Incident";
                cell5.textContent = "24h";
                cell6.textContent = "En cours";
            }

        <?php echo '</script'; ?>
>
    
    </main>
    
    <footer class="foot_bar bar">
        <div class="foot_titre">@2024 Gerico. Transport</div>
        <ul class="foot_ul_text">
            <li class="foot_text"><a class="foot_text" href="#rgpd">Politique RGPD</a></li>
            <li class="foot_text"><a class="foot_text" href="cookies.html">Gestion des cookies</a></li>
            <li class="foot_text"><a class="foot_text" href="#mentions">Mentions légales</a></li>
        </ul>
    </footer>
    
</body>
</html><?php }
}
