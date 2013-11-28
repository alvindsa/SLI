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
								<h5>Ajout d'une salle dans la base</h5>
							</div>
							<div class="widget-content nopadding">
								<form action="#" method="get" class="form-horizontal">
							
									
									<div class="form-group">
										<label class="control-label">Nom de la salle ?</label>
										<div class="controls">
											<input type="text" class="form-control input-sm" placeholder="Entré Ici le noms de la salle" />
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
</div>
	<?

	include('footer.php');

	?>