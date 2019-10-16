<?php

//phpinfo();
echo "Je vous donne le mail ici car j' n'ai pas réussi à créer l'envoie automatique<br><br>";
echo "mail : Bonjour, ceci est un mail";
mail("recipient", "subject", "message", "From: Sender");

?>
