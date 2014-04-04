<?php

session_start();

require_once('config.php');

require_once('header.php');

require_once ('sidebar.php');

require_once('style_switcher.php');

require_once ('ariane.php');

//connection à la bdd + requête
 $reponse36  = $bdd->query('SELECT * FROM salle');

?>
				<div class="row">
					<div class="col-xs-12">
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<i class="icon-th"></i>
								</span>
								<h5>Liste des salles</h5>
							</div>
							<div class="widget-content nopadding">
								<table class="table table-bordered table-striped table-hover" align="center">
									<thead>
										<tr>
											<th>Nom de la salle</th>
											<th>Action</th>
											
										</tr>
									</thead>
									<tbody>
<?php
 while ($donnees = $reponse36->fetch())
{

echo '<tr>
       <td>'.$donnees['noms'].'</td>
       <td>

										<div class="btn-group">
										<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="icon-user icon-white"></i> Action <span class="caret"></span></a>
										<ul class="dropdown-menu dropdown-primary">
										<li><a href="editer_salle.php?modifiersalles='.$donnees['idsalle'].'"><i class="icon-pencil"></i> Editer</a></li>
										<li><a href="suppr_salle.php?supprsalle='.$donnees['idsalle'].'"><i class="icon-trash"></i> Suprimer</a></li>
										</ul>
										</div>









       </td>
       
      </tr>';
}

?>				
										
									</tbody>
								</table>						
							</div>
						</div>
					</div>
				</div>
			
		
		
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
								<form action="action_add_salle.php" method="POST" class="form-horizontal">
							
									
									<div class="form-group">
										<label class="control-label">Nom de la salle ?</label>
										<div class="controls">
											<input type="text" class="form-control input-sm" placeholder="Entré Ici le noms de la salle" name="ajout_salle" />
	
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

<?php 

require_once ('footer.php');


 ?>