<?php
$ldapServer = 'ldap://SRV-PEDA1.stmartin.local';
$login  = 'alvinp';   // user
$pass = '****';  // password
$baseDN = "CN=Users,DC=stmartin,DC=local";
$caractère="@";
$domain="stmartin";
$loginldap = $login.$caractère.$domain;




function connect_ldap ($ldapServer)
  {
$ds= ldap_connect ($ldapServer); 
ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);
ldap_set_option($ds, LDAP_OPT_REFERRALS, 0);
ldap_set_option($ds, LDAP_OPT_NETWORK_TIMEOUT, 10);

    if($ds) 
    { 

      if (ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3) AND ldap_set_option($ds, LDAP_OPT_REFERRALS, 0))
       echo '<p>Version LDAPv3</p>';
  
       else
       {
        echo '<p>Impossible de modifier la version du protocole à 3</p>';// Attachement anonyme
       }
    } else 
    {
       echo "Connexion LDAP ... ECHEC";
   }
   return $ds;
}

connect_ldap($ldapServer);
$ldapbind = ldap_bind($ds, $loginldap, $pass);

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
    }
	   
  



ldap_close($ds);
?>
