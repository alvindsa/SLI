<?
session_start();

require('config.php');

require_once('header.php');

require_once ('sidebar.php');

require_once('style_switcher.php');

require_once ('ariane.php');

 	$time = 2;



switch($_POST['action'] || $_GET['action']){

case 'ajout_salle': // Lors de l'ajout d'une salle

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

  break;
  
   
  



  case 'modif_salles':
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
  break;
  
 
 case 'suppr_salles':
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

    echo '<meta http-equiv="refresh" content="0; URL=redirection_error.php?redirection=10" />';
  }
  break;

 case '3': //mot de passe non-cocordant
  $redir = 'index.php';
  $msg = '<b>ID non valide<br /><br />Vous allez être redirigé dans <b>'.$time.'</b> secondes...';
  break;
  
  
  
 
 case '4':
  $redir = 'index.php';
  $msg = '<b>Nouvelle candidat(e) ajoutée</b> <br />
                        Vous serez redirigé vers '.$redir.' dans <b>'.$time.'</b> secondes...';
  break;
   
     case '5':
  $redir = 'index.php';
  $msg = '<b>Désoler vous ne pouvez pas accéder a cette page !</b> <br />
                        Vous serez redirigé vers '.$redir.' dans <b>'.$time.'</b> secondes...';
						 break;
   case '6':
  $redir = 'admin/episode.php';
  $msg = '<b>La serie é bien été ajouter meréi</b> <br />
                        Vous serez redirigé vers '.$redir.' dans <b>'.$time.'</b> secondes...';
						 break;
						  case '7':
  $redir = 'index.php';
  $msg = '<b>Vous étes maintenant déconnecté</b> <br />
                        Vous serez redirigé vers '.$redir.' dans <b>'.$time.'</b> secondes...';
						break;
						case '8':
  $redir = 'index.php';
  $msg = '<b>La categorie a bien été supprimé</b> <br />
                        Vous serez redirigé vers '.$redir.' dans <b>'.$time.'</b> secondes...';
						break;
						case '10':
  $redir = 'index.php';
  $msg = '<b>Le candidat a bien été supprimé</b> <br />
                        Vous serez redirigé vers '.$redir.' dans <b>'.$time.'</b> secondes...';
						break;
						case '9':
  $redir = 'panel/index.php';
  $msg = '<b>Le sponsor a bien été modifié</b> <br />
                        Vous serez redirigé vers '.$redir.' dans <b>'.$time.'</b> secondes...';
						break;
						case '10':
  $redir = 'index.php';
  $msg = '<b>Vous devez étre connecté pour voir cette page !</b> <br />
                        Vous serez redirigé vers '.$redir.' dans <b>'.$time.'</b> secondes...';
						break;
						
						case '11':
  $redir = 'index.php';
  $msg = '<b>Nouveau partenaire ajoutée</b> <br />
                        Vous serez redirigé vers '.$redir.' dans <b>'.$time.'</b> secondes...';
						break;
							case '12':
  $redir = 'admin/ajouterart.php';
  $msg = '<b>Article ajouter !</b> <br />
                        Vous serez redirigés vers '.$redir.' dans <b>'.$time.'</b> secondes...';
						break;
						
            case '13':
  $redir = 'index.php';
  $msg = '<b>Le membre du comité a bien été modifié</b> <br />
                        Vous serez redirigé vers '.$redir.' dans <b>'.$time.'</b> secondes...';
						break;
						case '14':
  $redir = 'admin.php';
  $msg = '<b>Catégorie ajouté merci  !</b> <br />
                        Vous serez redirigés vers '.$redir.' dans <b>'.$time.'</b> secondes...';
						break;
						case '15':
  $redir = 'index.php';
  $msg = '<b>Nouvelle ville partenaire ajoutée</b> <br />
                        Vous serez redirigé vers '.$redir.' dans <b>'.$time.'</b> secondes...';
						break;
						break;
						case '16':
  $redir = 'admin/episode.php';
  $msg = '<b>Serie ajouter merci  !</b> <br />
                        Vous serez redirigés vers '.$redir.' dans <b>'.$time.'</b> secondes...';
						break;
					
					case '17':
  $redir = 'admin.php';
  $msg = '<b>Candidat du jury supprimé!</b> <br />
                        Vous serez redirigés vers '.$redir.' dans <b>'.$time.'</b> secondes...';
						break;
case '18':
  $redir = 'admin.php';
  $msg = '<b>Candidat du jury modifié ! </b> <br />
                        Vous serez redirigés vers '.$redir.' dans <b>'.$time.'</b> secondes...';
						break;
						
            case '19':
  $redir = 'calendrier.php';
  $msg = '<b>L\évènement ne peut finir avant de commencer soyer logique.</b> <br />
                        Vous serez redirigés vers '.$redir.' dans <b>'.$time.'</b> secondes...';
            break;

            case '20':
  $redir = 'calendrier.php';
  $msg = '<b>L\'évènement à bien été ajouté</b> <br />
                        Vous serez redirigés vers '.$redir.' dans <b>'.$time.'</b> secondes...';
            break;

            case '21':
  $redir = 'modif_event.php';
  $msg = '<b>Les champs ne sont pas remplie correctement</b> <br />
                        Vous serez redirigés vers '.$redir.' dans <b>'.$time.'</b> secondes...';
            break;
          
          case '22':
  $redir = 'index.php';
  $msg = '<b>Evènement modifié avec succès</b> <br />
                        Vous serez redirigés vers '.$redir.' dans <b>'.$time.'</b> secondes...';
            break;
case '23':
  $redir = 'panel/modifier_multimedia.php';
  $msg = '<b>Page presse modifié avec succès</b> <br />
                        Vous serez redirigés vers '.$redir.' dans <b>'.$time.'</b> secondes...';
            break;
 case '24':
  $redir = 'panel/index.php';
  $msg = '<b>Bienvenue '.$_SESSION['pseudo'].', vous étes maintenant connecté!</b> <br />
                        Vous serez redirigé vers '.$redir.' dans <b>'.$time.'</b> secondes...';
  break;
   
 case '25':
  $redir = 'index.php';
  $msg = '<b>Aurevoir, vous étes maintenant déconnecté!</b> <br />
                        Vous serez redirigé vers '.$redir.' dans <b>'.$time.'</b> secondes...';
  break;

case '26':
  $redir = 'panel/index.php';
  $msg = '<b>Erreur, vous étes déja connecté!</b> <br />
                        Vous serez redirigé vers '.$redir.' dans <b>'.$time.'</b> secondes...';
  break;

case '27':
  $redir = 'panel/index.php';
  $msg = '<b>Les indentifiant sont incorect !</b> <br />
                        Vous serez redirigé vers '.$redir.' dans <b>'.$time.'</b> secondes...';
  break;
  
  case '28':
  $redir = 'index.php';
  $msg = '<b>E-mail envoyé avec succes, Merci</b> <br />
                        Vous serez redirigé vers '.$redir.' dans <b>'.$time.'</b> secondes...';
                        break;
case '28':
  $redir = 'contact.php';
  $msg = '<b>Erreur d\'envoi, Merci de recomencer</b> <br />
                        Vous serez redirigé vers '.$redir.' dans <b>'.$time.'</b> secondes...';
                        break;

                        case '29':
  $redir = 'index.php';
  $msg = '<b>Cette page est réservé à l\'administration</b> <br />
                        Vous serez redirigé vers '.$redir.' dans <b>'.$time.'</b> secondes...';
  break;
   default:
  $redir = '../index.php';
  $msg = '<b>Erreur</b><br />Il y a eu une erreur interne !<br />Vous serez redirigés vers l\'accueil dans  <b>'.$time.'</b> secondes...';
  break;
 }




include('footer.php');
?>