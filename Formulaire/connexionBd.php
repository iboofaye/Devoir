<?php


$server = "localhost";
$login = "root";
$password = "root88";
$dbname = "school";
//creation d'un objet de connection à la base de données
try{

	$connect = new PDO('mysql:host='.$server.';dbname='.$dbname.';charset=utf8',$login,$password);
 	$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);




}catch(PDOException $e){
    echo 'Erreur !!! '.$e->getMessage();
     echo ' Echec connexion a la base de donnée';
}

?>
