<?php

session_start();

require('config.php');

require_once('header.php');

require_once ('sidebar.php');

require_once('style_switcher.php');

require_once ('ariane.php');


if (is_numeric($_GET['modifiersalles']))
{

$salles = $_GET['modifiersalles'];




//connection à la bdd + requête
 $reponse36  = $bdd->query('SELECT * FROM salle WHERE idsalle='.$salles);
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
								<form action="action.php" method="post" class="form-horizontal">
							
									
									<div class="form-group">
										<label class="control-label">Nouveau nom de salle </label>
										<div class="controls">
											<input type="text" class="form-control input-sm" placeholder="'.$donnees['noms'].'" />
										</div>
									</div>
										
									
									<div class="form-actions">
										<button type="submit" class="btn btn-primary btn-sm">Save</button>
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