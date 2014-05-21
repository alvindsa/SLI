<?
$baseDN = "dc=stmartin,dc=local";
$ldapServer = "192.168.10.1";
$ldapServerPort = 389;
$rdn="alvin";
$mdp="alm77gbv@";
$dn = 'cn=users,dc=foo,dc=org';

echo "Connexion au serveur <br />";
$conn=ldap_connect($ldapServer);

// on teste : le serveur LDAP est-il trouvé ?
if ($conn)
 echo "Le résultat de connexion est ".$conn ."<br />";
else
 die("connexion impossible au serveur LDAP");



/* 2ème étape : on effectue une liaison au serveur, ici de type "anonyme"
 * pour une recherche permise par un accès en lecture seule
 */

// On dit qu'on utilise LDAP V3, sinon la V2 par défaut est utilisé
// et le bind ne passe pas. 
if (ldap_set_option($conn, LDAP_OPT_PROTOCOL_VERSION, 3)) {
    echo "Utilisation de LDAPv3 \n";
 } else {
    echo "Impossible d'utiliser LDAP V3\n";
    exit;
 }




?>