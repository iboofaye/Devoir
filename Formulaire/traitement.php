<?php


try{
	require("connexionBd.php");
	//On récupere les valeurs du formulaire en securisant
/*$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$adresse=$_POST['adresse'];
$ville=$_POST['ville'];
$code=$_POST['code'];*/

  function Securisation($donnees)
  {
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = strip_tags($donnees);

    return $donnees;
  }

  $nom = Securisation($_POST['nom']);
  $prenom = Securisation($_POST['prenom']);
  $adresse = Securisation($_POST['adresse']);
  $ville = Securisation($_POST['ville']);
  $code = Securisation($_POST['code']);

  if (isset($_POST['save'])) {
    
  
    $requete = $connect->prepare('INSERT INTO personne(Non,Prenom,Adresse,Ville,Code) VALUES(?,?,?,?,?)');

    $requete->execute(array($nom,$prenom,$adresse,$ville,$code));
  }

  if ($requete){
  
    header('Location: affiche.php');

  }
    
  else{

    header('Location: Erreur.php');
    }
         
}catch(PDOException $e){
  echo 'Erreur!!! '.$e->getMessage();
  echo 'Echec de la connexion avec la base de donnée';
}

?>