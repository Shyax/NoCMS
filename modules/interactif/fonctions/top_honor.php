<?php
/****************************************************************************/
/*             NoCMS est un projet de site web pour l'�mulateur Mangos      */
/*            	Bas� sur le kit graphique de Frozen Blade Enhanced          */
/*           				Cod� par Polo                                   */
/****************************************************************************/

/////////////////////////////////////////////////////
//	Liste des fonctions de la page top_honor.php   //
/////////////////////////////////////////////////////
function getPlayers()
{
	global $db_characters;				//	0		1		2		3		4
	$fetch = $db_characters->query("SELECT `name`,`race`,`gender`,`class`,`totalHonorPoints` FROM `characters` ORDER BY `totalHonorPoints` DESC LIMIT 10");
	return $fetch;
}
?>