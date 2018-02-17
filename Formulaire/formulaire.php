<!DOCTYPE html>
<html>
<head>
	<title> Formulaire </title>

	<META charset="utf-8"/>
	 <link href="lien.css" rel="stylesheet">

</head>
<body>
  <div class="forme">
	<h1 style="..." >Veuilez renseigner les informations suivantes</h1>
	<p>
	<form method="POST" action="traitement.php" style="...">
		<fieldset width="300px" height="300px";>
			<legend><h2>Vos iformations</h2></legend>
			<table><tr><td><label for="nom"><h3>Nom </h3></label></td><td><input type="text" name="nom" id="nom" style="..."></input></td></tr>
			<tr><td><label for="nom"><h3>Prenom </h3></label></td><td><input type="text" name="prenom" id="prenom" style="..."></input></td></tr>
			<tr><td><label for="nom"><h3>Adresse </h3></label></td><td><input type="text" name="adresse" id="adresse" style="..."></input></td></tr>
			<tr><td><label for="nom"><h3>Ville </h3></label></td><td><input type="text" name="ville" id="ville" style="..."></input></td></tr>
			<tr><td><label for="nom"><h3>Code Postal </h3></label></td><td><input type="text" name="code" id="code" style="..."></input></td></tr>
			</table>
		</fieldset>
		</p>
		<p class="text2" style="..."><input class="bouton" type="submit" value="Enregistrer" name="save" id="save" /></p>
	</form>
  </div>
</body>