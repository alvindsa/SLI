<?php

require_once('header.php');

require_once ('sidebar.php');

require_once('style_switcher.php');

require_once ('ariane.php');
?>
		

<div class="row">
					<div class="col-xs-12">
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<i class="icon-align-justify"></i>									
								</span>
								<h5>Ajout d'une salle</h5>
							</div>
							<div class="widget-content nopadding">
								<form action="ajout_salle.php" method="get" class="form-horizontal">
									<div class="form-group">
										<label class="control-label">Nom de la salle</label>
										<div class="controls">
											<input type="text" class="form-control input-sm" name="salle" />
										</div>
									</div>
									
									<div class="form-actions">
										<button type="submit" class="btn btn-primary btn-sm">Ajouté</button> or <a class="text-danger" href="#">Cancel</a>
									</div>
								</form>
							</div>
						</div>						
					</div>
				</div>
		


<?php 

require_once ('footer.php');


 ?>


