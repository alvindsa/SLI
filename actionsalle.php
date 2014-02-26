<?


  if (isset($_POST['nom_salle']) and !empty($_POST['nom_salle']))
  {

  $salle = $_POST['nom_salle'];

 mysql_query("INSERT INTO `dsa`.`salle` (
`idsalle` ,
`noms`)
VALUES (
NULL ,  '".$salle."'
);")or die (mysql_error());

// la salle a été ajouté redirection 

 echo '<meta http-equiv="refresh" content="0; URL=redirection_succes.php?redirection=1" />';
  


  }
  else 
  {

    echo '<meta http-equiv="refresh" content="0; URL=redirection_error.php?redirection=1" />';
  }



  




include('footer.php');
?>