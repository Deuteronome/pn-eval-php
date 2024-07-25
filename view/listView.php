<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="stylesheet" href="../style/bootstrap.css">
    <link rel="stylesheet" href="../style/style.css">
    <script src="../script/bootstrap.bundle.js"></script>
</head>

<body>
    <!-- Créer un header joli avec un message de bienvenue qui mentionne le nom de l'utilisateur -->
    <header>
        <h1>Bienvenue, <?= $user ?> !</h1>
    </header>


    <!-- Créer un main avec un tableau qui présente les différents évènements de la base de données-->
    <main>
        <?php
        foreach($eventList as $event)  {
            ?>
        <div class="eventImg">
            <?= $event['image'] ?> 
        </div>
        <div class="eventLieu">
            <?= $event['lieu'] ?> 
        </div>
        <div class="eventDescription">
            <?= $event['description'] ?> 
        </div>
        <div class="eventDifficulte">
            <?= $event['difficulte'] ?> 
        </div>
        <?php
        }
        ?>
    </main>
</body>

</html>