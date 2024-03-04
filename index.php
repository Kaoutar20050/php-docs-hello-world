<?php

echo "kaoutar oumayma!";

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Envoi de photo par formulaire</title>
    </head>
	<body>
		<form method="post" enctype="multipart/form-data">
			<input type="file" name="photo">    
			<input type="submit" value="retailler">
		</form>
		<?php
		if (isset($_FILES['photo']['tmp_name'])) {  
			$taille = getimagesize($_FILES['photo']['tmp_name']);
			$largeur = $taille[0];
			$hauteur = $taille[1];
			$largeur_miniature = 300;
			$hauteur_miniature = $hauteur / $largeur * $largeur_miniature;
			$im = imagecreatefromjpeg($_FILES['photo']['tmp_name']);
			$im_miniature = imagecreatetruecolor($largeur_miniature
			, $hauteur_miniature);
			imagecopyresampled($im_miniature, $im, 0, 0, 0, 0, $largeur_miniature, $hauteur_miniature, $largeur, $hauteur);
			imagejpeg($im_miniature, 'miniatures/'.$_FILES['photo']['name'], 90);
			echo '<img src="miniatures/' . $_FILES['photo']['name'] . '">';
		}
		?>
	</body>
</html>
