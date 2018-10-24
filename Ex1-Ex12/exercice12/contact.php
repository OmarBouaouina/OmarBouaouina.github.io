<?php
  include "debut.htm";
?>  
	  
	<div id="corps">
	  <p>Entrez votre adresse email, votre message et cliquez sur le bouton Envoyer.</p>
      <form action="mail2.php" method="post">
        <label>Email</label><input type="mail" name="mail" required><br>
        <label>Message</label><textarea cols="50" rows="8" name="message"></textarea><br>
        <input type="submit" value="Envoyer">
      </form>
    </div>	

<?php
  include "fin.htm";
?>  
