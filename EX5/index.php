<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX5</title>
</head>
<body>
    <form action="index.php" method="get">
        <fieldset>
        <legend>Formulaire n°2</legend>
        <select name="gender" id="gender">
        <option value=""> Votre sexe ?</option>
        <option value="Homme">Homme</option>
        <option value="Femme">Femme</option>
        <option value="autre">Autre</option>
        </select>
        <input type="text" placeholder="Nom" name="lastName">
        <input type="text" placeholder="Prenom" name="firstName">
        <input type="submit" value="let's gooo">
        </fieldset>
    </form>
    <?php echo "Vous etes ". $_GET['firstName']." ". $_GET['lastName'] ." et votre sexe est ". $_GET['gender']; ?> 
</body>
</html>