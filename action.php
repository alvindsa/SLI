<?

 

  // Si on à affaire a une modification de salle on execute les instructions suivantes.
  if (isset($_POST['new_salles']) and !empty($_POST['new_salles']))
  {
  // Mise en variable 
  $id = $_POST['id_salles'];
  $salle = $_POST['new_salles'];
  //Modification dans la BASE
   mysql_query("UPDATE `dsa`.`salle` SET `noms` = '".$salle."' WHERE `idsalle` = '".$id."';")or die (mysql_error());
  // la salle a été ajouté redirection 
  echo '<meta http-equiv="refresh" content="0; URL=redirection_succes.php?redirection=2" />';
  }
  else 
  {

    echo '<meta http-equiv="refresh" content="0; URL=redirection_error.php?redirection=1" />';
  }

  
 


 
  // Si on à affaire a une modification de salle on execute les instructions suivantes.
  if (isset($_POST['supprsalle']) and !empty($_POST['supprsalle']) and is_numeric($_POST['supprsalle']))
  {
  // Mise en variable 
 
  $salle = $_POST['supprsalle'];

  //Modification dans la BASE
   mysql_query('DELETE FROM dsa.salle WHERE salle.idsalle = '.$salle)or die (mysql_error());
  // la salle a été ajouté redirection 
  echo '<meta http-equiv="refresh" content="0; URL=redirection_succes.php?redirection=20" />';
  }
  else 
  {

    echo $_POST['action'];
  }




?>
