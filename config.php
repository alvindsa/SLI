<?php
/* Inserer ici votre courriel  maxime.pain@aol.fr*/
$to = "erazerdk@gmail.com";

/* Inserer ici le titre quand on vous envoie un message */
$titre = "Site Maxime-Pain.fr";

/* Inserer ici le nom de la page lorsque le message a été envoyé avec succès */
$lienOK = "./redirection.php?redirection=1";

/* Inserer ici le nom de la page lorsque le message n'a pas été envoyé avec succès */
$lienPasOK = "./redirection.php?redirection=2";

try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=dsa', 'root', 'fridoo3620');

  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Échec lors de la connexion : ' . $e->getMessage();
}

//identifiants

$adresse = 'localhost';
$nom = 'root';
$motdepasse = 'fridoo3620';
$database = 'dsa';

mysql_connect($adresse, $nom, $motdepasse);
mysql_select_db($database);

function Send_Mail($dest, $subject , $content_txt, $content_html, $mail_from="noreply@maxime-pain.fr", $name_from="Maxime-Pain") 
{ 

$boundary = "_".md5 (uniqid (rand()));
$entete = "MIME-Version: 1.0\n";

$entete .= "X-Sender: <www.free-dream.net>\n";
$entete .= "X-Mailer: PHP\n";
$entete .= "X-auth-smtp-user: smtp.free-dream.cs.cx \n";
$entete .= "X-abuse-contact: abuse@free-dream.net \n";

$entete .= "Reply-to: $name_from <$mail_from>\n";
$entete .= "From:$name_from <noreply@maxime-pain.fr>\n";

$entete .= "Content-Type: multipart/alternative; boundary=\"$boundary\""; 

$message = "--" . $boundary . "\n"; 
$message.= "This is a multi-part message in MIME format.\n\n"; 

$message .= "Content-Type: text/plain; charset=\"iso-8859-1\"\n"; 
$message .= "Content-Transfer-Encoding: quoted-printable\n\n"; 
$message .= $content_txt; 
$message .= "\n\n"; 
$message .= "--" . $boundary . "\n"; 
$message .= "Content-Type: text/html; charset=\"iso-8859-1\"\n"; 
$message .= "Content-Transfer-Encoding: quoted-printable\n\n"; 
$message .= str_replace("=","=3D",$content_html); 
$message .= "\n\n"; 


return @mail($dest, $subject, $message, $entete); 
}
?>
