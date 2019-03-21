<?php 


//  Récupération de l'utilisateur et de son pass hashé

try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=projet_inscription', 'root', '');
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);



// Comparaison du pass envoyé via le formulaire avec la base

if(!empty($_POST['username']) && !empty($_POST['psw']))
  {
      $pseudo = $_POST['username'];
      $pass = $_POST['psw'];
 
      $req = $bdd->prepare('SELECT pass, pseudo FROM members WHERE pseudo = :pseudo AND pass = :pass');
      $req->execute(array(':pseudo' => $pseudo, 'pass' => $pass ));
      $res = $req->fetch();
 
      if($res)
      {
        if($pass === $res['pass'] && $pseudo === $res['pseudo'])
        {
            header('Location:deja_inscrit.php');
        }
        else
        {
            echo 'Votre pseudo ou mot de passe est incorrect';
			header('location:aboutus.php');
        }
      }
   }
   else
   {
       //renvoi du formulaire
	   echo 'Votre pseudo ou mot de passe est incorrect';
 
   }
}
catch (Exception $e) 
{
        die('Erreur : ' . $e->getMessage());
}
//} 
 
 ?>