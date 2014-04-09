<?php
require_once ('config.php');

 if (isset($_POST['ajout_application']) and !empty($_POST['ajout_application']))
 {
 	// mise en variable et test de la confomité du nom
  	$application = $_POST['ajout_application'];
  	
  	$salle = NULL;
    $salle = $_POST['salle'];

 $niveau = '';
    if (!empty($_POST['niveau']))
    { 
    	$niveau = $_POST['niveau']; 

	}

print_r ($_POST['salle']);
}

?>