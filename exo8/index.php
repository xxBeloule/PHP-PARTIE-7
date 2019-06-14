<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>PHP partie 7 exercice 7</title>
  <style media="screen">
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
    <div class="container-fluid">
    <div class="color">
      <p>Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.</p>
      <?php
      if ( isset($_POST['firstname']) && isset($_POST['name']) && isset($_POST['genre']) && isset($_POST['file']) && empty($_POST['name'])) {?>
        <form class="form-group" action="index.php" method="post">
          <select class="" name="genre">
            <option name="choose" value="Choose">Sexe</option>
            <option value="Madame">Femme</option>
            <option value="Monsieur">Monsieur</option>
          </select>
          <label for="firstname">Prénom :</label>
          <input type="text" name="firstname" placeholder="Emmanuel">
          <label for="name">Nom :</label>
          <input type="text" name="name" placeholder="Macron">
          <label for="file">Fichier :</label>
          <input type="file" name="file" value="">
          <button class="btn btn-light"type="submit" name="button">Valider</button>
        </form>
      <?php } else {
        echo 'Bonjour '. $_POST['genre'].' '.$_POST['firstname'].' '.$_POST['name'].' votre fichier est : '.$_POST['file'];
     } ?>
    </div>
    </div>
</body>
</html>
