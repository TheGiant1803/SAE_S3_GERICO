<?php
require('pdo.php');

// Assume you want to display the PDF for fiche with ID 1
$idToFetch = 1; // Change this to the correct ID

// Prepare the SQL statement to select the PDF data
$stmt = $pdo->prepare("SELECT fp FROM fiche_paie WHERE id_fp = :id");
$stmt->execute(array(':id' => $idToFetch));

// Fetch the result
$pdfData = $stmt->fetchColumn();

if ($pdfData) {
    // Set headers to display PDF in the browser
    header('Content-Type: application/pdf');
    header('Content-Disposition: inline; filename="fiche_paie.pdf"');
    header('Content-Length: ' . strlen($pdfData));
    
    // Output the PDF data
    echo $pdfData;
} else {
    echo "No PDF found for this fiche.";
}
?>