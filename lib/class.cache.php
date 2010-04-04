<?php
class systemCache
{
// met en cache une variable
	public function create_cache($nom_cache, $contenu)
	{
        // �chappement les caract�res sp�ciaux pour pouvoir mettre le tout entre quotes dans le futur fichier
        $contenu = str_replace('"','\"', $contenu);

        // cr�ation du code php � stocker dans le fichier    
			$contenu = '<?php $cache = "'.$contenu.'"; ?>';
        // �criture du code dans le fichier
        $fichier = fopen('./cache/' . $nom_cache . '.cache', 'w');
        $resultat = fwrite($fichier, $contenu);
        fclose($fichier);

        // renvoie true si l'�criture du fichier a r�ussi
        return $resultat;
	}
	// r�cup�re une variable mise en cache
	public function get_cache($nom_cache)
	{
        // v�rifie que le fichier de cache existe
        if(is_file('./cache/'.$nom_cache.'.cache'))
        {
                // le fichier existe, on l'ex�cute puis on retourne le contenu de $cache
                include('./cache/' . $nom_cache . '.cache');
                return $cache;
        }
        else
        {
                // le fichier de cache n'existe pas, on retourne false
                return false;
        }
	}
	// d�truit un cache
	public function destroy_cache($nom_cache)
	{
        return @unlink('./cache/' . $nom_cache . '.cache');
	}
	public function verifTime($nom_cache)
	{
		return (filemtime('./cache/'.$nom_cache.'.cache') > (time()-1800)) ? true : false;
	}
};
?>
