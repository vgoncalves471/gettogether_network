<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <style>
      input{

        margin-bottom: 10px;
      }
    </style>

</head>
<body>
    
    <form method="POST" action="form.php">
    <div class="champ">
      <label for="nom">Entrez votre nom* : </label>
      <input type="text" id="nom" name="nom" required>
    </div>
    <div class="champ">
      <label for="prenom">Entrez votre prenom*</label>
      <input type="text" id="prenom" name="prenom" required>
    </div>
    <div class="champ">
      <label for="email">Entrez votre email* :</label>
      <input type="email" id="pass" name="email" required>
    </div>
    <div class="champ">
      <label for="password">Entrez votre mot de passe* :</label>
      <input type="password" id="pass" name="pass" required>
    </div>
    <div class="champ">
      <input type="submit" value="Envoyer">
     </div>
  </form>
    
    
</body>
</html>