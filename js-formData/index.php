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

  <form id="form">
    <input type="text" id="nom" name="nom">
    <input type="text" id="prenom" name="prenom">
    <input type="email" id="email" name="email">
    <input type="password" id="password" name="password">
    <input type="password" id="passwordCompare" name="passwordCompare">
  </form>

  <button id="postJs">Post</button>
  <!-- ADD SCRIPT -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="./script.js"></script>
</body>

</html>