<?php



require('config.php');

require_once('header.php');

require_once ('sidebar.php');

require_once('style_switcher.php');

require_once ('ariane.php');


if (is_numeric($_GET['modifierapplication']))
{
	
// Mise en variable de la salle
$application = $_GET['modifierapplication'];




//connection à la bdd + requête
 $reponse36  = $bdd->query('SELECT * FROM application WHERE id='.$application);
 $donnees = $reponse36->fetch();





echo '<div class="row">
					<div class="col-xs-12">
						<div class="widget-box">
							<div class="widget-title">
												<span class="icon">
									<i class="icon-align-justify"></i>									
								</span>
								<h5>Ajout d\'une salle dans la base</h5>
							</div>
							<div class="widget-content nopadding">
								<form action="action_update_application.php" method="post" class="form-horizontal">
							
									
									<div class="form-group">
										<label class="control-label">Nom de l\'application </label>
										<div class="controls">
											<input type="text" class="form-control input-sm" name="nom_application" placeholder="'.$donnees['nom'].'" />
											<input type="hidden" class="form-control input-sm" name="action" value="modif_application"/>
											<input type="hidden" class="form-control input-sm" name="id" value="'.$donnees['id'].'" />
										</div>
									</div>';
	
										echo '<div class="form-group">
										<label class="control-label">Salle</label>
										<div class="controls">
											<select name="salle[]" multiple=\'multiple\'>';

							
										foreach (unserialize($donnees['salle']) as $salle ) {
													echo '<option selected>'.$salle.'</option>';
													
													# code...
												}		
										
												
											
											
											echo '</select>
										</div>';


										echo '<div class="form-group">
										<label class="control-label">Niveau</label>
										<div class="controls">
											<select name="niveau[]" multiple=\'multiple\'>';

							
										foreach (unserialize($donnees['niveau']) as $niveau ) {
													echo '<option selected>'.$niveau.'</option>';
													
													# code...
												}		
										
												
											
											
											echo '</select>
										</div>';
										
									
									echo '<div class="form-actions">

										
										
										
										<a href="javascript:history.back()"><button type="submit" class="btn">Retour<a></button>
										<button type="submit" class="btn btn-primary btn-sm">Valider</button>
									
									</div>
								</form>
							</div>
						</div>						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>';
		

};			
			
		
		
	
 

require_once ('footer.php');


 ?>