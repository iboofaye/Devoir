<!DOCTYPE html>
<html>
<head>
  <title>Page d'affichage</title>
  <meta charset="utf-8"/>
</head>
<body>
	<?php
   try{
    // Inclusion du script de connexion à la base
    require('connexionBd.php');
    $requete = $connect->query("SELECT * from personne");
    ?>
    <table>
    <tr><td ><center><b>Listes des clients</b></center> </td></tr>
    <p><tr><th>ID</th><th>NOM</th><th>PRENOM</th><th>ADRESSE</th><th>VILLE</th><th>CODE</th></tr></p>
    <?php
      // Boucle sur le resultat de la requete pour afficher la liste
             while($resultat = $requete->fetch()){
        ?>
                <tr><p> <td><?php echo $resultat['ID']; ?></td>
                  <td><?php echo $resultat['Nom']; ?></td>
                  <td><?php echo $resultat['Prenom'];  ?></td>
                  <td><?php echo $resultat['Adresse'];  ?></td>
                  <td><?php echo $resultat['Ville'] ; ?></td>
                  <td><?php echo $resultat['Code'];  ?></td>
                 </p>
                </tr>

        <?php
             }
         ?>
      
    </table>
    <?php
   }catch(PDOException $e){
         die('Erreur!!!'.$e->getMessage());
   }
   ?>

</body>
</html>