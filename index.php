<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
    <style>
        body{
            background-image:url(image.jpg);
            background-attachment: fixed;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
        div{
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            margin: auto;
            margin-top: 100px;
        }
        h2{
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>
    <div>
    <h2>Formulaire d'inscription</h2>
    <form action="cible.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="age">Âge :</label>
        <input type="number" id="age" name="age" required><br><br>

        <label for="Telephone">Télèphone :</label>
        <input type="number" id="Telephone" name="Telephone" required><br><br>

        <label for="adresse">Adresse :</label>
        <input type="text" id="adresse" name="adresse" required><br><br>

        <input type="submit" value="S'inscrire">
    </form>
    </div>
</body>
</html>