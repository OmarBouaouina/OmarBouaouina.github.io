<?php
  $mail = $_POST['mail'];
  $message = $_POST['message'];
  $titre = "Formulaire de contact mon eFormation";
  $texte = "Voici le message de l'utilisateur : ".htmlentities($message, ENT_QUOTES, "UTF-8");
  $destinataire="admin@mediaforma.com";
  $delapartde = $mail; 
  $from  = "From:".$delapartde."\n"; 
  $from .= "MIME-version: 1.0\n";
  $from .= "Content-type: text/html\n";
  $from .= "charset: UTF-8\n";
  if (!mail($destinataire,$titre,$texte,$from))
    echo "Un problème s'est produit lors de l'envoi du message. Recommencez SVP.";
  else {
    echo "Les données ont été transmises.<br><br>";
    echo "<a href='http://www.mediaforma.com/eformation/exercice7/index.htm'>Retourner au site</a>";
  }	
?>
