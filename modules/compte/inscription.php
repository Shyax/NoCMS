<?php
//Si l'internaute est d�j� connect�, inutile qu'il vienne sur cette page
if(isset($_SESSION['connect'])) 
{
	include('./modules/error.php');
}
else
{
	//On inclut les fonctions de la page
	include('./modules/compte/fonctions/inscription.php');

	if(isset($_POST['bouton']))
	{
		//On va v�rifier qu'aucun champ est vide
		verifEmptyRow();
		//On va v�rifier que le captcha est bon
		antispam_check();
		//On va maintenant v�rifier les deux mots de passe
		verifMdp();
		//On va v�rifier que l'adresse email rentr� est correcte
		verifEmail();
		//On va v�rifier que le nom d'utilisateur n'est pas d�j� pris
		verifUser();	
		//On a fait tous les tests de v�rification, on peut lancer la requ�te d'inscription
		inscription();
		$_SESSION['connect'] = true; // On active la variable de connexion
		$_SESSION['id'] = $db_realmd->lastInsertId();
	}
	else
	{
		//On g�n�re le captcha
		$captcha = antispam_ins();
	}
	//On inclut maintenant le HTML de la page
	include('./modules/compte/html/inscription.php');

	//On n'inclut pas le menu de gauche car on utilise un autre type de vue
}
?>