<?php
/****************************************************************************/
/*             NoCMS est un projet de site web pour l'�mulateur Mangos      */
/*            	Bas� sur le kit graphique de Frozen Blade Enhanced          */
/*           				Cod� par Polo                                   */
/****************************************************************************/
if(isset($_SESSION['connect'])) // Inutile d'accepter un internaute d�j� connect�
{
	include('./modules/error.php');
}
else
{
	include('./modules/compte/fonctions/reset_mdp.php');

	if(isset($_POST['bouton']))
	{
		//On v�rifie qu'aucun champ n'est vide
		verifEmptyRow();
		//On v�rifie que les informations sont vraies
		verifInfos();
		//Tout est bon, on lance l'email,etc
		insert();
	}
	include('./modules/compte/html/reset_mdp.php');
	include('./inc/rightnavi.php');
}