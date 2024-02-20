<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>API Fetch JS Post Json - PHP </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <p>API fetch JS avec la méthod post avec un objet Json et réception des données avec PHP</p>
  <h2>Détails de cheminement</h2>
  <ul>
    <li> Lors de l'appuie sur post</li>
    <li> En arrière plan JS reçois capte un événement addEventListener click</li>
    <li> Il éxecute un fecth méthod de l'API fetch vers la route définit (jsPhp.php)</li>
    <li> La page jsPhp reçois les données si la demande répond à une condition</li>
    <li> Alors php traîte les information et retournera les résultat encodé avec base64_encode(json_encode($data))</li>
    <li> base64_encode renvois notre object JSON en format text encodé</li>
    <li> Javascript récupére dans le headers avec 'res.text()' les informations retournée par php </li>
    <li> On peu maintenant décodé l'information puis on va l'affiché dans la console.</li>
  </ul>
  <button id="postJs">Post</button>
  <!-- ADD SCRIPT -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="./script.js"></script>
</body>

</html>