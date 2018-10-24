<?php
  $mail = $_POST['mail'];
  $pseudo = $_POST['pseudo'];
  $pass = $_POST['pass'];
  $titre = "Formulaire d'inscription mon eFormation";
  $texte = "Voici les donn&eacute;es du formulaire :<br><ul><li>ch1=".$mail."</li><li>ch2=".$pseudo."</li><li>ch3=".$pass."</li></ul>";
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
