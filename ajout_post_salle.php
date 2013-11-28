<?
include('header.php');

if (isset($_POST['form']))
{//si la variable exemple_1 n'est pas vide (et donc existe et est remplie) alors il se passe ceci :

      if (isset($_POST['salle']))
     {//si la variable exemple_1 n'est pas vide (et donc existe et est remplie) alors il se passe ceci :

$salle = $_POST['salle'];

    mysql_query("INSERT INTO `dsa`.`salle` (
`idsalle` ,
`noms`)
VALUES (
NULL ,  '".$pseudo."'
);")or die (mysql_error());

echo '<meta http-equiv="refresh" content="0; URL=redirection.php?redirection=9" />';

     }
    else
      {//
echo '<meta http-equiv="refresh" content="0; URL=redirection.php?redirection=8" />';

      }
}   
else
{//sinon il ce passe ceci : 
echo '<meta http-equiv="refresh" content="0; URL=redirection.php?redirection=7" />';
}








include('footer.php');



?>