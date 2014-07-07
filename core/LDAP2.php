<?php




/*
$ldapServer = 'ldap://SRV-PEDA1.stmartin.local';
$login  = 'alvinp';   // user
$pass = 'alm77gbv';  // password
$baseDN = "CN=Users,DC=stmartin,DC=local";
$caractère="@";
$domain="stmartin";
$loginldap = $login.$caractère.$domain;
*/

if (isset($_POST['login']))
{
$ldapServer = 'ldap://SRV-PEDA1.stmartin.local';
$login = $_POST['login'];
$pass = $_POST['pass'];
$caractère="@";
$domain="stmartin";
$loginldap = $login.$caractère.$domain;

$ds= ldap_connect($ldapServer); 
ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);
ldap_set_option($ds, LDAP_OPT_REFERRALS, 0);
ldap_set_option($ds, LDAP_OPT_NETWORK_TIMEOUT, 10);

    if($ds) 
    { 

      if (ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3) AND ldap_set_option($ds, LDAP_OPT_REFERRALS, 0))
      {

      }
         else
        {
        echo '<p>Impossible de modifier la version du protocole à 3</p>';// Attachement anonyme
        }
    }
   else 
      {
       echo "Connexion LDAP ... ECHEC";
       }





$ldapbind = @ldap_bind($ds, $loginldap, $pass);
/*
 if ($ldapbind) {
        $filter="(sAMAccountName=$login)";
        $result = ldap_search($ds,$baseDN,$filter);
        ldap_sort($ds,$result,"sn");
        $info = ldap_get_entries($ds, $result);
        for ($i=0; $i<$info["count"]; $i++)
        {
            if($info['count'] > 1)
                break;
            echo "<p>You are accessing <strong> ". $info[$i]["sn"][0] .", " . $info[$i]["givenname"][0] ."</strong><br /> (" . $info[$i]["samaccountname"][0] .")</p>\n";
            echo '<pre>';
             var_dump($info);
            echo '</pre>';
            $userDn = $info[$i]["distinguishedname"][0]; 
        }
        @ldap_close($ldap);
    } else {
        $msg = "Invalid email address / password";
        echo $msg;
        $exit=1;
    }
	   
  */

 
 if ($ldapbind)
 {
  $SESSION="Vous etes connecté"; // est identifié par LDAP
 
setcookie('pseudo', $login, time() + 365*24*3600, null, null, false, true); // On écrit un cookie
setcookie('pays', 'France', time() + 365*24*3600, null, null, false, true); // On écrit un autre cookie...

echo '<meta http-equiv="refresh" content="0; URL=../redirection_success.php?redirection=10" />';


 }
 else 
 { 
 
 echo '<meta http-equiv="refresh" content="0; URL=../redirection_error.php?redirection=10" />';
}
 
 




ldap_close($ds);

}
else 

{

  echo "aucun login entré";

}
?>
