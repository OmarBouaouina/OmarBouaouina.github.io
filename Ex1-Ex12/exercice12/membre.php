<?php
  include "debut.htm";
?>  
	  
	  
	<div id="corps">
	  <p>Pour rejoindre la zone membre, vous devez vous inscrire.<br>Entrez les informations vous concernant et cliquez sur le bouton Valider.</p>
      <form action="mail.php" method="post">
        <label>Email</label><input type="mail" name="mail" required><br>
        <label>Pseudo</label><input type="text" name="pseudo" pattern="[a-zA-Z0-9]{3,8}" title="Le pseudo doit être composé de 3 à 8 caractères alphanumériques" required><br>
        <label>Mot de passe</label><input type="password" name="pass" pattern="[a-zA-Z0-9]{5,5}" title="Le mot de passe doit être composé de 5 caractères alphanumériques" required><br>
        <input type="submit" value="Valider">
      </form>
    </div>	

<?php
  include "fin.htm";
?>  
