<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>API Fetch JS Post Json - PHP </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="d-flex flex-column justify-content-center align-items-center">
  <p class="p-2 mb-2">API fetch JS avec la méthode post avec un objet Json, header application/x-www-form-urlencoded, et réception des données avec PHP</p>
  <h2 class="p-2 mb-2">Détails de cheminement</h2>
  <ul class="p-2 mb-2">
    <li class="p-1 mb-1"> Lors de l'appuie sur post</li>
    <li class="p-1 mb-1"> En arrière plan JS reçois capte un événement addEventListener click</li>
    <li class="p-1 mb-1"> Il exécute la function buttonPost qui fait un appel à postJs avec les paramètre de la requête</li>
    <li class="p-1 mb-1"> Une requête est alors émise avec la fetch méthode de l'API fetch vers la route définit (jsPhp.php)</li>
    <li class="p-1 mb-1"> La page jsPhp reçois les données et peu les interceptées avec la variable globale $_POST[clé] et si la demande répond à une condition</li>
    <li class="p-1 mb-1"> Alors php traite les information et retournera les résultat sous forme JSON json_encode($data)</li>
    <li class="p-1 mb-1"> Javascript récupéré dans le headers avec 'res.json()' les informations retournée par php </li>
    <li class="p-1 mb-1"> On peu maintenant affiché le résultat dans la console.</li>
  </ul>
  <button class="btn btn-success p-2" id="postJs">Post</button>
  <!-- ADD SCRIPT -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="./script.js"></script>
</body>

</html>