<?php

require_once '../includes/smarty/libs/Smarty.class.php';

// Initialiser Smarty
$smarty = new Smarty();
$smarty->setTemplateDir('./templates');
$smarty->setCompileDir('./templates_c');
$smarty->setCacheDir('./cache');
$smarty->setConfigDir('./configs');

// Définir la fonction PHP pour le plugin
function ajouter_jours_ouvrables($params, $template) {
    $date = $params['date'] ?? null;
    $duree = $params['duree'] ?? 0;

    if (!$date) {
        return "Erreur : paramètre 'date' manquant";
    }

    $dateObj = new DateTime($date);
    $joursAjoutes = 0;

    while ($joursAjoutes < $duree) {
        $dateObj->modify('+1 day');
        $jour = $dateObj->format('N'); // 1 = lundi, 7 = dimanche
        if ($jour < 6) { // Jours ouvrables
            $joursAjoutes++;
        }
    }

    return $dateObj->format('Y-m-d');
}

// Enregistrer le plugin Smarty
$smarty->registerPlugin('function', 'ajouter_jours_ouvrables', 'ajouter_jours_ouvrables');
