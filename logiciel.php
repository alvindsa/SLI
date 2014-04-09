<?php



require_once('config.php');

require_once('header.php');

require_once ('sidebar.php');

require_once('style_switcher.php');

require_once ('ariane.php');

//connection à la bdd + requête
 $reponse36  = $bdd->query('SELECT * FROM application');
$reponse37  = $bdd->query('SELECT * FROM salle');
$reponse38  = $bdd->query('SELECT * FROM niveau');


?>
				<div class="row">
					<div class="col-xs-12">
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<i class="icon-th"></i>
								</span>
								<h5>Liste des logiciels </h5>
							</div>
							<div class="widget-content nopadding">
								<table class="table table-bordered table-striped table-hover" align="center">
									<thead>
										<tr>
											<th>Nom</th>
											<th>Emplacement installé</th>
											<th>Niveau ( Arborescence )</th>
											<th>Action</th>
											
										</tr>
									</thead>
									<tbody>
<?php
 while ($donnees = $reponse36->fetch())
{

echo '<tr>
       <td>'.$donnees['nom'].'</td>
       <td>'.$donnees['salle'].'</td>
       <td>'.$donnees['niveau'].'</td>
       <td>

										<div class="btn-group">
										<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="icon-user icon-white"></i> Action <span class="caret"></span></a>
										<ul class="dropdown-menu dropdown-primary">
										<li><a href="editer_salle.php?modifiersalles='.$donnees['id'].'"><i class="icon-pencil"></i> Editer</a></li>
										<li><a href="suppr_salle.php?supprsalle='.$donnees['id'].'"><i class="icon-trash"></i> Suprimer</a></li>
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
								<h5>Ajout d'une logiciel dans la base</h5>
							</div>
							<div class="widget-content nopadding">
								<form action="action_add_application.php" method="POST" class="form-horizontal">
							
									
									<div class="form-group">
										<label class="control-label">Nom </label>
										<div class="controls">
											<input type="text" class="form-control input-sm" placeholder="Entré Ici le noms de la salle" name="ajout_application" required />
	
										</div>
										<div class="form-group">
										<label class="control-label">Ajout d'une salle</label>
										<div class="controls">
											<select name="salle[]" multiple='multiple'>

											<?php
											 while ($donnees2 = $reponse37->fetch())
											{
										echo '<option>'.$donnees2['noms'].'</option>';
												
											}
												?>
											</select>
										</div>
									<div class="form-group">
										<label class="control-label">Niveau (Arborescence)</label>
										<div class="controls">
											<select multiple name="niveau">

											<?php
											 while ($donnees3 = $reponse38->fetch())
											{
										echo '<option>'.$donnees2['noms'].'</option>';
												
											}
												?>
											</select>
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