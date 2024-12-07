<?php
require('pdo.php');

// Read PDF file as binary data
$pdfData = file_get_contents("../assets/test_fiche_paie.pdf");

// Prepare the SQL statement to update the existing record
$stmt = $pdo->prepare("UPDATE fiche_paie SET fp = :fp WHERE id_fp = :id");

$nblignes = $pdo->query('select count(id_fp) from fiche_paie')->fetchColumn();

// Execute the prepared statement with the actual PDF content and the ID of the fiche
for($i=1;$i<=$nblignes;$i++)
{
    $stmt->execute(array(':fp' => $pdfData, ':id' => $i));
}

?>