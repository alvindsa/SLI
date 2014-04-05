<?php
require_once ('config.php');
/*
echo $_POST['radios'] ;
echo $_POST['id_salle'] ;
*/


if (is_numeric($_POST['id_salle']) and !empty($_POST['id_salle']) and isset($_POST['radios']))
{
	

  $salle = $_POST['id_salle'];
	$req = $bdd->exec('DELETE FROM salle WHERE idsalle= '.$salle);
	
   

 // La salle à bien été ajouté rediretion
 echo '<meta http-equiv="refresh" content="0; URL=redirection_succes.php?redirection=4" />';
 }
 else 
 {

 echo '<meta http-equiv="refresh" content="0; URL=redirection_error.php?redirection=4" />'; 
 }



?>