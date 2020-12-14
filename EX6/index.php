<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX6</title>
</head>

<body>
    <?php

    if(empty($_GET['gender']) && empty($_GET['firstName']) && empty($_GET['lastName']) ){

        ?>
    <form action="index.php" method="get">
        <fieldset>
            <legend>Formulaire n°2</legend>
            <select name="gender" id="gender">
                <option value=""> Votre sexe ?</option>
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
                <option value="autre">Autre</option>
            </select>
            <input type="text" placeholder="Prenom" name="firstName">
            <input type="text" placeholder="Nom" name="lastName">
            <input type="submit" value="let's gooo">
        </fieldset>
    </form>

    <?php
     } else if(isset($_GET['firstName']) && isset($_GET['lastName']) && isset($_GET['gender'])) {
         $gender = $_GET['gender'];
         $firstName = $_GET['firstName'];
         $lastName = $_GET['lastName'];

         if($gender == "Homme"){
             echo "bonjour ". $firstName ." ". $lastName ." et vous etes un ".$gender ;
         } else if($gender == "Femme") {
            echo "bonjour ". $firstName ." ". $lastName ." et vous etes une ".$gender ;
         } else if($gender == "autre") {
            echo "bonjour ". $firstName ." ". $lastName ." vous etes de type autre";
          } else {
                echo "vous n'avez pas mis de sexe ";
            }
         }
     ?>
</body>

</html>