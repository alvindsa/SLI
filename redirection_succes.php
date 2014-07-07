<?php

// Fichier servant au redirection effective


require_once('header.php');

require_once ('sidebar.php');

require_once('style_switcher.php');

require_once ('ariane.php');

if(isset($_GET['redirection']) AND is_numeric($_GET['redirection'])){
 $time = 2;
 



 switch($_GET['redirection']){

  case '1': //mot de passe non-cocordant
  $redir = 'index.php';
  $msg = '<b>Salle ajouté ! <br /><br />Vous allez étre redirigé dans <b>'.$time.'</b> secondes...';
  break;
  
   
  case '2':
  $redir = 'salles.php';
  $msg = '<b>Mofification effectué ! </b>Vous allez être redirigé dans<br /> <b>'.$time.'</b> secondes...';
  break;

  
 case '3': //mot de passe non-cocordant
  $redir = 'salles.php';
  $msg = '<b>Salle suprimer <br /><br />Vous allez être redirigé dans <b>'.$time.'</b> secondes...';
  break;
  
  
  
 
 case '4':
  $redir = 'index.php';
  $msg = '<b>Logiciel Ajouté</b> <br />
                        Vous serez redirigé vers '.$redir.' dans <b>'.$time.'</b> secondes...';
  break;
   
 case '5':
  $redir = 'logiciel.php';
  $msg = '<b>Logiciel suprimer !</b> <br />
                        Vous serez redirigé vers '.$redir.' dans <b>'.$time.'</b> secondes...';
  break;
   


    
   case '6':
  $redir = 'niveau.php';
  $msg = '<b>Le niveau à bien été ajouté</b> <br />
                        Vous serez redirigé vers '.$redir.' dans <b>'.$time.'</b> secondes...';
						 break;
						  
              case '7':
  $redir = 'logiciel.php';
  $msg = '<b>Logiciel Supprimé</b> <br />
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


case '10':
  $redir = 'index.php';
  $msg = '<b>Vous êtes maintenant connecté</b> <br />
                        Vous serez redirigé vers '.$redir.' dans <b>'.$time.'</b> secondes...';
            break;



					
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
}





				echo '

				<meta http-equiv="refresh" content="'.$time. ';url='.$redir.' " />

				<div class="row">
					<div class="col-xs-12">
					
						<div class="alert alert-success">
							<button class="close" data-dismiss="alert">×</button>
							<strong></strong>'.$msg.'
						</div>
						
						
					</div>
				</div>
				
						
							
					</div>
				</div>';
				
			


include('footer.php');

?>