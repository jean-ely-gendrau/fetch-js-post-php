<?php
header('Content-Type: application/json;charset=utf-8');

// Si $_POST['id'] existe
if (isset($_POST['id'])) {
  $returnData = [];

  // On parcourt le tableau global $_POST
  foreach ($_POST as $keyData => $valData) {
    $valData = is_numeric($valData) ? intval($valData) + 1 : $valData; // Si c'est un nombre on l'incrémente de 1
    $returnData[$keyData] = "Valeur traîter avec php : {$valData}"; // On modifie la valeur de notre tableau de données
  }
  echo json_encode($returnData); // echo pour afficher la réponse de retour pour javascript
  exit(); // N'écessaire pour arrêter le scrip est évité toutes erreurs de traitement
}
