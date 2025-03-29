<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation d'inscription</title>
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
   
    
    <?php
    // Vérifier si les données ont été envoyées
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = isset($_POST['nom']) ? htmlspecialchars($_POST['nom']) : '';
        $prenom = isset($_POST['prenom']) ? htmlspecialchars($_POST['prenom']) : '';
        $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
        $age = isset($_POST['age']) ? htmlspecialchars($_POST['age']) : '';
        $Telephone = isset($_POST['Telephone']) ? htmlspecialchars($_POST['Telephone']) : '';
        $adresse = isset($_POST['adresse']) ? htmlspecialchars($_POST['adresse']) : '';
    } else {
        $nom = $prenom = $email = $age = $Telephone = $adresse = '';
    }
    ?>
     <div>
     <h2>Confirmation de l'inscription</h2>
    <form action="cible.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" value="<?php echo $nom; ?>" required><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" value="<?php echo $prenom; ?>" required><br><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>" required><br><br>

        <label for="age">Âge :</label>
        <input type="number" id="age" name="age" value="<?php echo $age; ?>" required><br><br>

        <label for="Telephone">Téléphone :</label>
        <input type="number" id="Telephone" name="Telephone" value="<?php echo $Telephone; ?>" required><br><br>

        <label for="adresse">Adresse :</label>
        <input type="text" id="adresse" name="adresse" value="<?php echo $adresse; ?>" required><br><br>

    
    </form>
    </div>
</body>
</html>
