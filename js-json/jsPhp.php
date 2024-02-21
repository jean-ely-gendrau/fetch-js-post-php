<?php
header('Content-Type: application/json;charset=utf-8');

$data = file_get_contents("php://input"); // Réception des données du header
$data = json_decode($data, true);  // Conversion des données json en tableau associatif

// Si il y à des données
if ($data['test']) {
  $returnData = [];

  foreach ($data as $keyData => $valData) {
    $valData = is_numeric($valData) ? intval($valData) + 1 : $valData; // Si c'est un nombre on l'incrémente de 1
    $returnData[$keyData] = "Valeur traiter avec php : {$valData}"; // On modifie la valeur de notre tableau de données
  }
  echo json_encode($returnData); // echo pour afficher la réponse de retour pour javascript
  exit(); // Nécessaire pour arrêter le script est évité toutes erreurs de traitement
} else {
  echo json_encode(["Erreur:" => 'Ooops une erreur viens de ce produire']); // echo pour afficher une erreur
  exit(); // Nécessaire pour arrêter le script est évité toutes erreurs de traitement
}
