<?php
require_once ('config.php');
/*
echo $_POST['radios'] ;
echo $_POST['id_application'] ;
*/


if (is_numeric($_POST['id_application']) and !empty($_POST['id_application']) and isset($_POST['radios']))
{
	

    $application = $_POST['id_application'];
	$req = $bdd->exec('DELETE FROM application WHERE id= '.$application);
	
   

 // La salle à bien été ajouté rediretion
 echo '<meta http-equiv="refresh" content="0; URL=redirection_succes.php?redirection=7" />';
 }
 else 
 {

 echo '<meta http-equiv="refresh" content="0; URL=redirection_error.php?redirection=7" />'; 
 }



?>