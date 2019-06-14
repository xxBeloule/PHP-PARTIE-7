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
        <div class="container color">
            <p>Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode GET.</p>
        </div>
        <h1 class="text-center">Formulaire de contact : </h1>
        <div class="d-flex justify-content-center">
            <form class="d-flex flex-column" action="user.php" method="get">
                <div class="form-group">
                    <label for="name">Nom : </label>
                    <input type="text" class="form-control" name="name" placeholder="Dupont">
                </div>
                <div class="form-group">
                    <label for="firstname">Prénom : </label>
                    <input type="text" class="form-control" name="firstname" placeholder="Romain">
                </div>
              <button name="send" type="submit" class="btn btn-light">Envoyer</button>
            </div>
          </form>
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">        
    </body>
</html>