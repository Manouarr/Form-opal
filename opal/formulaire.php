<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Formulaire commande PHP_ROUND_HALF_EVEN</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

</head>

<body>
	




<!-------------------------------------------------------------------------------------------------------------------------
-----------------------------------------------   SECTION QUESTION PRINCIPALE   ---------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------->







<div class="formulaire">

    <h1 style="text-align: center;">FORMULAIRE COMMANDE PLV </h1>


	<form id="form-opal" style="text-align: center; margin-top: 50px;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">


		
		<h4>Quelle marque ?</h4>
				


				<br><br>
			 
		

		<br>

		<div class="marque">

			<label>
  				<input style="display: none;" type="radio" name="marque" value="opal">
  				<img id="opal" src="img/opal.png" alt="Logo Opal">
			</label>

			<label>
  				<input style="display: none; padding:0;" type="radio" name="marque" value="demetz">
  				<img id="demetz" src="img/demetz.png" alt="Logo Demetz">
			</label>

		
		</div>

		<br><br>

    



<!-------------------------------------------------------------------------------------------------------------------------
-----------------------------------------------   CHOIX OPAL   ---------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------->






<?php

		if(isset($_POST['marque']) && $_POST['marque'] == "opal") { 


			echo '

			<hr style="width: 400px; margin-left: auto; margin-right: auto; margin-bottom: 50px;">
			
			<h4>Quelle licence ?</h4>

			<hr style="width: 150px; margin-left: auto; margin-right: auto; margin-bottom: 50px;">

			<p>KIDS</p>

			<div class="licence">

			<br><br>

			<h5></h5>

			<label class="">
  				<input style="display: none;" type="radio" name="licence" value="avengers">
  				<img id="opal" src="img/avengers.png" alt="Logo Opal">
			</label>

			<label>
  				<input style="display: none;" type="radio" name="licence" value="disney-Princesse">
  				<img id="opal" src="img/princesses.png" alt="Logo Disney Princesse">
			</label>

			<label>
  				<input style="display: none;" type="radio" name="licence" value="eleven-paris">
  				<img id="opal" src="img/boys&girls.png" alt="Logo boys&girls">
			</label>

<br><br>

			<label>
  				<input style="display: none;" type="radio" name="licence" value="reine-neige">
  				<img id="opal" src="img/frozen.png" alt="Logo frozen">
			</label>

			<label>
  				<input style="display: none;" type="radio" name="licence" value="lulu-Enfants">
  				<img id="opal" src="img/lulu-enfants.png" alt="Logo lulu enfants">
			</label>

			<label>
  				<input style="display: none;" type="radio" name="licence" value="minions">
  				<img id="opal" src="img/minions.png" alt="Logo minions">
			</label>

<br><br>

			<label>
  				<input style="display: none;" type="radio" name="licence" value="spiderman">
  				<img id="opal" src="img/spiderman.png" alt="Logo spiderman">
			</label>

			<label>
  				<input style="display: none;" type="radio" name="licence" value="starwars">
  				<img id="opal" src="img/starwars.png" alt="Logo starwars">
			</label>

			<label>
  				<input style="display: none;" type="radio" name="licence" value="vaiana">
  				<img id="opal" src="img/vaiana.png" alt="Logo vaiana">
			</label>

<br><br>

		<hr style="width: 150px; margin-left: auto; margin-right: auto; margin-bottom: 50px;">

			<p>ADULTES</p>


			<label>
				<input style="display: none;" type="checkbox" name="licence" value="rolling-stones">
				<img id="opal" src="img/rolling-stones.png" alt="Logo Rolling Stones">
	  		</label>

	  		<label>
				<input style="display: none;" type="checkbox" name="licence" value="new-york">
				<img id="opal" src="img/newyork.png" alt="Logo New York">
	  		</label>

	  		<label>
				<input style="display: none;" type="checkbox" name="licence" value="lulu-femme">
				<img id="opal" src="img/lulu-femme.png" alt="Logo Lulu Castagnette">
	  		</label>

<br><br>

	  		<label>
				<input style="display: none;" type="checkbox" name="licence" value="lapo">
				<img id="opal" src="img/lapo.png" alt="Logo Lapo">
	  		</label>

	  		<label>
				<input style="display: none;" type="checkbox" name="licence" value="eleven-paris">
				<img id="opal" src="img/elevenparis.png" alt="Logo Eleven Paris">
	  		</label>

	  		<label>
				<input style="display: none;" type="checkbox" name="licence" value="berenice">
				<img id="opal" src="img/berenice.png" alt="Logo Berenice">
	  		</label>
	
			<br><br>


		</div>';


		} elseif (isset($_POST['marque']) && $_POST['marque'] == "demetz") {
            
            echo '

            <hr style="width: 400px; margin-left: auto; margin-right: auto; margin-bottom: 50px;">
			
			<h4>Quelle licence ?</h4>

			<hr style="width: 150px; margin-left: auto; margin-right: auto; margin-bottom: 50px;">

			<br><br>

			<label>
			<p>Biking</p>
			<input style="display: none;" type="radio" name="licence" value="biking">
			<img id="opal" src="img/ski.png" alt="Logo Biking">
		  </label>

		  <label>
		  <p>Natation</p>
			<input style="display: none;" type="radio" name="licence" value="natation">
			<img id="opal" src="img/natation.png" alt="Logo Natation">
		  </label>

<br><br>

		  <label>
		  <p>Running</p>
			<input style="display: none;" type="radio" name="licence" value="running">
			<img id="opal" src="img/running.png" alt="Logo Running">
		  </label>

		  <label>
		  <p>Balles/ballons</p>
			<input style="display: none;" type="radio" name="licence" value="Balles/ballons">
			<img id="opal" src="img/lifestyle.png" alt="Logo Balles/ballons">
		  </label>

            <br><br>'; 

        } elseif (isset($_POST['licence'])) {

			echo '
			
			<h4>Quels Supports souhaitez-vous ?</h4>

				<br>
			
			
				<label for="">Vitrophanie</label>
        		<input type="number" name="support" id="input-support1" style="width: 50px;" min="0">

				<div id="text-support1"></div>
				
				<br><br>
				
				<label for="input-support2">Affiche aimantée</label>
        		Affiche aimantée <input type="number" name="support" id="input-support2" style="width: 50px;" min="0">
				
				<div id="text-support2"></div>
			
				<br><br>

				<label for="input-support3">Affiche sur support rétro éclairé</label>
        		Affiche sur support rétro éclairé <input type="number" name="support" id="input-support3" style="width: 50px;" min="0"> 
				
				<div id="text-support3"></div>
				
				<br><br>

				<label for="input-support4">Stickers</label>
        		Stickers <input type="number" name="support" id="input-support4" style="width: 50px;" min="0">

				<div id="text-support4"></div>

				<br><br>

				<label for="input-support5">Toile Lightbox</label>
        		Toile Lightbox <input type="number" name="support" id="input-support5" style="width: 50px;" min="0">

				<div id="text-support5"></div>
				
				<br><br>
			
			
				
				';

			

		} elseif (isset($_POST['support'])) {


			echo '
			
			<h4>Quelle vitrophanie souhaitez-vous ?
			<br><br>

				<label>
					<input style="display: none;" type="radio" name="vitrophanie" value="ski">
					<img id="opal" src="img/ski.png" alt="Logo Ski">
		  		</label>

		  		<label>
					<input style="display: none;" type="radio" name="vitrophanie" value="natation">
					<img id="opal" src="img/natation.png" alt="Logo Natation">
		  		</label>

				<br>
				<div id="text-support2"></div>
				<br>

		  		<label>
					<input style="display: none;" type="radio" name="vitrophanie" value="running">
					<img id="opal" src="img/running.png" alt="Logo Running">
		  		</label>

				<br>
				<div id="text-support3"</div>
				<br>

				<label>
					<input style="display: none;" type="radio" name="vitrophanie" value="lifestyle">
					<img id="opal" src="img/lifestyle.png" alt="Logo lifestyle">
		  		</label>
				<br>
				
				<br>
				<div id="text-support4"</div>
				<br>
				';

				
		
			

		} elseif (isset($_POST['vitrophanie'])) {

			echo '
			
			<h4>Quelle est la largeur de la vitrophanie ?</h4>
			<br><br>
			
			<input type="number" name="largeur-vitrophanie">
			<br>
			
			';

			



		} elseif (isset($_POST['largeur-vitrophanie'])) {


		echo '
			
			<h4>Quelle est la hauteur de la vitrophanie ?</h4>
			<br><br>
			
			<input type="number" name="hauteur-vitrophanie">
			<br>
			
			';


		} elseif (isset($_POST['hauteur-vitrophanie'])) {

		echo '
			
			<h4>Veuillez insérer une photo de la surface concernée</h4>
			<br>

			<input type="file" name="photo-surface" id="">
			<br>
			
			';
  
		} elseif (isset($_POST['photo-surface'])) {
			
		echo '

			<h4>impression des visuels</h4>
			<br><br>

			<input type="radio" name="impression" value="visuel-hd"> Visuel HD pour une impression par votre prestataire
			<br><br>
			<input type="radio" name="impression" value="impression-prestataire"> Impression de notre prestataire
			<br><br>
			';

		} elseif (isset($_POST['impression'])) {

		echo '
		
			<h4>Est-ce qu\'il faut prévoir une dépose avant de poser cette nouvelle vitrophanie</h4>
			<br><br>

			<input type="radio" name="depose-vitrophanie" value="depose-vitrophanie"> Oui
			<br>
			<input type="radio" name="depose-vitrophanie" value="depose-vitrophanie"> Non

			<br><br>
		';
		} elseif (isset($_POST['depose-vitrophanie'])) {

		echo '
			
			<h2>MERCI !</h2>

			<h4>VOTRE DEMANDE A BIEN ÉTÉ REÇUE ET VA ÊTRE TRAITÉE PAR NOS ÉQUIPES.</h4>
		
		
		';


		}
?>

		<input class="btnForm" style="margin-top: 30px" type="submit" name="submit" value="Valider">
	</form>

</div>

<script src="script.js"></script>

</body>
</html>
