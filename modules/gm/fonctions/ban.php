<?php
/****************************************************************************/
/*             NoCMS est un projet de site web pour l'�mulateur Mangos      */
/*            	Bas� sur le kit graphique de Frozen Blade Enhanced          */
/*           				Cod� par Polo                                   */
/****************************************************************************/

/////////////////////////////////////////////////////
//	Liste des fonctions de la page ban.php         //
/////////////////////////////////////////////////////
function getBan()
{
	global $db_realmd;
	$query = $db_realmd->query("SELECT * FROM `account_banned` WHERE `active` = '1'");
	return $query;
}
	
?>