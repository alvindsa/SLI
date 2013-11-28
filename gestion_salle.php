<?
include('header.php');

    $reponse36  = $bdd->query('SELECT * FROM salle');
     



   echo '
           
   <table width="80%" align="center">
   <caption>Liste des salles</caption>

<thead> <!-- En-tête du tableau -->
       <tr>
        
        <th>Salle</th>
       <th>Action</th>
       

       </tr>
   </thead>


   ';
 
      
  while ($donnees = $reponse36->fetch())
{
   echo '<tr>
       <td>'.$donnees['noms'].'</td>
       <td><a href="action_gestion_salle.php?supprsalle='.$donnees['idsalle'].'">Supprimer la salle</a></td>
       
      </tr>

';

}

echo'</table>';

echo '

  <div class="row">
          <div class="col-xs-12">
            <div class="widget-box">
              <div class="widget-title">


                <span class="icon">
                  <i class="icon-align-justify"></i>                  
                </span>
                <h5>Ajout d\'une salle dans la base</h5>
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


';

echo '<br> <center><input type="button" value="page précédente" onclick="javascript:history.back()"><center>';









include('footer.php');









if (isset($_GET['salles']))
{//si la variable exemple_1 n'est pas vide (et donc existe et est remplie) alors il se passe ceci :

      if (isset($_GET['salles']))
     {//si la variable exemple_1 n'est pas vide (et donc existe et est remplie) alors il se passe ceci :

$salle = $_GET['salle'];

    mysql_query("INSERT INTO `dsa`.`salle` (
`idsalle` ,
`noms`)
VALUES (
NULL ,  '".$pseudo."'
);")or die (mysql_error());

echo '<meta http-equiv="refresh" content="0; URL=redirection.php?redirection=9" />';

     }
    else
      {//
echo '<meta http-equiv="refresh" content="0; URL=redirection.php?redirection=8" />';

      }
}   
else
{//sinon il ce passe ceci : 
echo '<meta http-equiv="refresh" content="0; URL=redirection.php?redirection=7" />';
}








include('footer.php');


