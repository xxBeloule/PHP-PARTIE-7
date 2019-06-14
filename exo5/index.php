<!DOCTYPE html>
<html lang="fr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
       </style>
    <meta charset="utf-8">
    <title>PHP partie 7 exercice 5</title>
  </head>
  <body>
    <div class="container text-center">
    <div class="color">
      <p>Créer un formulaire sur la page index.php avec :</p>
        <p>Une liste déroulante pour la civilité (Mr ou Mme)</p>
          <p>Un champ texte pour le nom</p>
            <p>Un champ texte pour le prénom</p>
              <p>Ce formulaire doit rediriger vers la page index.php.</p>
                <p>Vous avez le choix de la méthode.</p>
    </div>
    <?php if (isset($_POST['name']) && isset($_POST['firstname']) && isset($_POST['gender']) && $_POST['gender']!='' && $_POST['firstname']!='' && $_POST['name']!='' ) { ?>
      <p class="alert-success">Bonjour <?= $_POST['gender'] . ' '. $_POST['name'] .' '. $_POST['firstname']; ?> </p>
    <?php } else {?>
      <p class="alert-danger">Veuillez remplir le formulaire s'il vous plait !</p>
      <form class="form" action="index.php" method="post">
        <select class="" name="gender">
          <option value="monsieur">Mr</option>
          <option value="madame">Mme</option>
        </select>
        <label for="firstname">Prénom :</label>
        <input type="text" name="firstname" placeholder="Pierre">
        <label for="name">Nom :</label>
        <input type="text" name="name" placeholder="Dupont">
        <button class="btn btn-dark"type="submit" name="button">Valider</button>
      </form>
  <?php  } ?>
    </div>
  </body>
</html>
