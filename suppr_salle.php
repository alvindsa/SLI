<?php

session_start();

require('config.php');

require_once('header.php');

require_once ('sidebar.php');

require_once('style_switcher.php');

require_once ('ariane.php');


if (is_numeric($_GET['supprsalle']))
{

// Mise en variable de la salle
$salles = $_GET['supprsalle'];









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
									<label class="control-label">Radio inputs</label>
										<div class="controls">
											<label class=""><div style="position: relative;" class="iradio_flat-blue"><input style="position: absolute; opacity: 0;" name="radios" checked="" type="radio"><ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: none repeat scroll 0% 0% rgb(255, 255, 255); border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div> Checked</label>
											<label class=""><div style="position: relative;" class="iradio_flat-blue checked"><input style="position: absolute; opacity: 0;" name="radios" type="radio"><ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: none repeat scroll 0% 0% rgb(255, 255, 255); border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div> Unchecked</label>
											<label class="disabled"><div style="position: relative;" class="iradio_flat-blue checked disabled"><input style="position: absolute; opacity: 0;" name="radios2" checked="" disabled="" type="radio"><ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: none repeat scroll 0% 0% rgb(255, 255, 255); border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div> Checked disabled</label>
											<label class="disabled"><div style="position: relative;" class="iradio_flat-blue disabled"><input style="position: absolute; opacity: 0;" name="radios2" disabled="" type="radio"><ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: none repeat scroll 0% 0% rgb(255, 255, 255); border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div> Unchecked disabled</label>
										</div>







											<input type="hidden" class="form-control input-sm" name="action" value="modif_salles"/>
											<input type="hidden" class="form-control input-sm" name="id_salles" value="'.$donnees['idsalle'].'" />
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