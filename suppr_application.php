
<?php

require_once('config.php');

require_once('header.php');

require_once ('sidebar.php');

require_once('style_switcher.php');

require_once ('ariane.php');

if (is_numeric ($_GET['application'])) 
{
	

$application = $_GET['application'];
$reponse36  = $bdd->query('SELECT * FROM application WHERE id = '.$application);
 $donnees = $reponse36->fetch();

} else exit;

?>



				<div class="row">
					<div class="col-xs-12">
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<i class="icon-align-justify"></i>									
								</span>
								<h5>Supprimer ?</h5>
							</div>
							<div class="widget-content nopadding">
								<form action="action_suppr_application.php" method="POST" class="form-horizontal">
									
                                    
									<div class="form-group">
										<label class="control-label">Voulez vous supprimer l'application' <?php echo $donnees['nom']; ?></label>
										<div class="controls">
											<label><input type="radio" name="radios" checked/> Oui</label>
											<label><input type="radio" name="radios" disabled /> Non</label>
										
	
										</div>
										<input type="hidden" class="form-control input-sm" placeholder="Entré Ici le noms de la salle" name="id_application" value="<?php echo $application; ?>"/>
	
									</div>
									
									

									<div class="form-actions">
					<button type="submit" class="btn btn-primary btn-sm">Valider</button>
					<a href="javascript:history.back()"><button type="submit" class="btn">Retour<a></button>

<?php



		

		
			
		
		
	
 

require_once('footer.php');


 ?>