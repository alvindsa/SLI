<?php

session_start();

require('config.php');

require_once('header.php');

require_once ('sidebar.php');

require_once('style_switcher.php');

require_once ('ariane.php');


if (is_numeric($_GET['modifierniveau']))
{
	
// Mise en variable de la salle
$niveau = $_GET['modifierniveau'];




//connection à la bdd + requête
 $reponse36  = $bdd->query('SELECT * FROM niveau WHERE id='.$niveau);
 $donnees = $reponse36->fetch();





echo '<div class="row">
					<div class="col-xs-12">
						<div class="widget-box">
							<div class="widget-title">
												<span class="icon">
									<i class="icon-align-justify"></i>									
								</span>
								<h5>Modification d\'un niveau</h5>
							</div>
							<div class="widget-content nopadding">
								<form action="action_update.php" method="post" class="form-horizontal">
							
									
									<div class="form-group">
										<label class="control-label">Niveau </label>
										<div class="controls">
											<input type="text" class="form-control input-sm" name="nom_niveau" placeholder="'.$donnees['niveau'].'" />
											<input type="hidden" class="form-control input-sm" name="action" value="modif_salles"/>
											<input type="hidden" class="form-control input-sm" name="id_niveau" value="'.$donnees['id'].'" />
										</div>
									</div>
										
									
									<div class="form-actions">

										
										
										
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