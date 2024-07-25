<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue!</title>
    <link rel="stylesheet" href="../style/bootstrap.css">
    <link rel="stylesheet" href="../style/style.css">
    <script src="../script/bootstrap.bundle.js"></script>
</head>

<body>
    <!-- Créer un formulaire pour récupérer le nom de l'utilisateur connecté -->
    <form action="../controller/list.php" method="post">
        <label for="user">Nom d'utilisateur</label>
        <input type="text" name="user" id="user">
        <input type="submit" value="Envoyer">
</body>

</html>