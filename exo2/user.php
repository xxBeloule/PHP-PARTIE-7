<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>PHP partie 7 exercice 2</title>
    </head>
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
        .red {
            color: red;
        } 
    </style>
    <body>
        <div class="color">
            <p>Bienvenue sur notre page de membres.</p>
        </div>
        <div class="justify-content-center">
            <?php
            if (empty($_POST)) {
                echo "Un problème est survenu, vous allez être redirigez vers notre page d'inscription";
            } else {
                ?>
                <p class="red">Vous vous appelez : <?php echo $_POST['name']; ?> et votre nom de famille est : <?php echo $_POST['firstname']; ?> </p>
            <?php }
            ?>
        </div>
    </body>
</html>