<?php
/****************************************************************************/
/*             NoCMS est un projet de site web pour l'�mulateur Mangos      */
/*            	Bas� sur le kit graphique de Frozen Blade Enhanced          */
/*           				Cod� par Polo                                   */
/****************************************************************************/
if(isset($_SESSION['connect']) && !verifTimeVote($_SESSION['id'])){ exit ("Vous avez d�j� vot� il y a moins de 2 heures");}
include('./modules/menu/fonctions/vote.php');
if(isset($_POST['bouton']) && !isset($_SESSION['connect'])) 
{
	$id = traiterInfos1();
	addPoints($id);
}
elseif(isset($_SESSION['connect']))
{
	addPoints($_SESSION['id']);
}
include('./modules/menu/html/vote.php');

include('./inc/rightnavi.php');
?>