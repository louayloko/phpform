<?php


if ($_POST['psw'] != $_POST['psw-repeat']){
	echo 'Passwords do not match';
} else  {

	// Connexion à la base de données
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=projet_inscription', 'root', '');
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
	
	// Insertion du message à l'aide d'une requête préparée
	$req = $bdd->prepare('INSERT INTO members (pseudo, pass, email, date_inscription ) VALUES(?, ?, ?, NOW() + interval -1 day)');

	$req->execute(array($_POST['username'], password_hash($_POST['psw'], PASSWORD_DEFAULT), $_POST['email']));


	// Redirection du visiteur vers la page du minichat

	header('location: deja_inscrit.php');
}

?>