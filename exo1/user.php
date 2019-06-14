<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>PHP partie 7 exercice 1</title>
        <style>
     .color {
         background-color: grey;
        font-weight: 400;
        border: 3px solid black;
        margin: 20px;
        padding: 20px;
        text-align: center;
        border-radius: 100px;
        font-weight: bolder;
            }
     .white {
         color: white;
            } 
        </style>
    </head>
    <body>
        <div class="color">
            <p>Bonjour <?= htmlspecialchars($_GET['name']).' '. htmlspecialchars($_GET['firstname']).' merci de nous avoir choisis.'; ?></p>
            <a href="index.php">Retour au formulaire</a>
        </div>
    </body>
</html>