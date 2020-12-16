<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX8</title>
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
            <input type="text" placeholder="Prenom" name="firstName" required>
            <input type="text" placeholder="Nom" name="lastName"required>
            <input type="submit" value="let's gooo">
            <input type="file" name="file" required>
        </fieldset>
    </form>

    <?php   
     } else if(!empty($_GET['firstName']) && !empty($_GET['lastName']) && !empty($_GET['gender'])) {
         $gender = $_GET['gender'];
         $firstName = $_GET['firstName'];
         $lastName = $_GET['lastName'];
         $file = $_GET['file'];
         $fileType = strtolower(pathinfo($file,PATHINFO_EXTENSION));
        $fileNoExt = pathinfo($file , PATHINFO_FILENAME);
         if($gender == "Homme"){
             echo "Bonjour ". $firstName ." ". $lastName ." et vous etes un ".$gender;
         } else if($gender == "Femme") {
            echo "Bonjour ". $firstName ." ". $lastName ." et vous etes une ".$gender;
         } else if($gender == "autre") {
            echo "Bonjour ". $firstName ." ". $lastName ." vous etes de type ".$gender;
          } else {
                echo "vous n'avez pas mis de sexe ";
            }

            if($fileType == 'pdf'){
                echo "<br/>  Votre fichier ".$fileNoExt." est un pdf !";
            }else{
                echo "<br/> Veuillez mettre un pdf";
            }
         }
        
     ?>
</body>

</html>