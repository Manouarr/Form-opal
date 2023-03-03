<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Formulaire commande PLV</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

</head>
<body>
    
<div class="formulaire" style="text-align: center;">

    <h3><strong>DEMANDE DE VISUELS OPAL DEMETZ</styrong></h3>

    <br>


<form style="text-align: center; margin-top: 50px;" method="post" action="formulaire.php">


    <label>Nom du magasin :</label><br>
        <input type="text" name="nomMagasin" required="required"> 
        
        <br><br>

    <label>Ville :</label><br>
        <input type="text" name="ville" required="required"> 
        
        <br><br>

    <label>Numéro client FR :</label><br>
        <input type="text" name="numeroFR" required="required">

        <br><br>

    <label>Nom - Prénom :</label><br>
        <input type="text" name="nomPrenom" required="required">

        <br><br>

    <label>Adresse</label><br>
        <input type="text" name="adresse" required="required">

        <br><br>

    <label>Code Postal</label><br>
        <input type="number" name="codePostal" required="required">

        <br><br>

    <label>Email :</label><br>
        <input type="email" name="email" required="required">

        <br><br>

    <label>Téléphone portable :</label><br>
        <input type="number" name="telephone" required="required">

        <br><br>
    
    <label>Représentant commercial :</label><br>
        <input type="text" name="nomCommercial" required="required">

        <br><br>

<input class="btnForm" style="margin-top: 30px" type="submit" name="submit" value="Valider">

</form>
</div>


</body>
</html>

