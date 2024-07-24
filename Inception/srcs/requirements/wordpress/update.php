<?php
require_once('wp-load.php');
$user_id = 1; // ID de l'utilisateur Kortolan
$new_password = 'kigo'; // Remplacez par le nouveau mot de passe

wp_set_password($new_password, $user_id);
echo "Mot de passe mis à jour avec succès.";
?>
