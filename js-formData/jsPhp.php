<?php
header('Content-Type: application/json;charset=utf-8');

// Si $_POST['id'] existe
if (isset($_POST)) {
  $returnData = [];

  // On parcourt le tableau global $_POST
  foreach ($_POST as $keyData => $valData) {
    $returnData[$keyData] = "Valeur traité avec php : {$valData}"; // On modifie la valeur de notre tableau de données
  }
  echo json_encode($returnData); // echo pour afficher la réponse de retour pour javascript
  exit(); // Nécessaire pour arrêter le script est évité toutes erreurs de traitement
} else {
  echo json_encode('false'); // echo pour afficher la réponse erreur de retour pour javascript
  exit(); // Nécessaire pour arrêter le script est évité toutes erreurs de traitement
}
