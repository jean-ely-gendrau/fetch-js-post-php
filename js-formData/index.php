<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>API Fetch JS Post Json - PHP </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="d-flex flex-column justify-content-center align-items-center">
  <p class="p-2 mb-2">API fetch JS avec la méthode post avec avec FormData et réception des données avec PHP</p>

  <form class="d-flex flex-column mb-2" id="form">
    <input class="w-50 p-2 mb-1" type="text" id="nom" name="nom" placeholder="votre nom">
    <input class="w-50 p-2 mb-1" type="text" id="prenom" name="prenom" placeholder="votre prénom">
    <input class="w-50 p-2 mb-1" type="email" id="email" name="email" placeholder="votre email">
    <input class="w-50 p-2 mb-1" type="password" id="password" name="password" placeholder="votre mot de pass">
    <input class="w-50 p-2 mb-1" type="password" id="passwordCompare" name="passwordCompare" placeholder="confirmer votre mot de pass">
    <button class="btn btn-success p-2 w-75" id="postJs">Post</button>
  </form>

  <!-- ADD SCRIPT -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="./script.js"></script>
</body>

</html>