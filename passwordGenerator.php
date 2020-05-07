<?php

function passwordGenerator(
	// dessous les paramètres par défaut : longueur du mdp et set de caractères utilisés.
	$length = 16,
	$keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'
) {
	$str = '';// initialisation à vide de la variable qui stockera le résultat
	$max = mb_strlen($keyspace, '8bit') - 1;
	// calcul de la longueur de la chaîne de caractères et encodage du set en 8bits
	if ($max < 1) {
		throw new \RuntimeException('le mot de passe');
		//si la longueur du set de caractères de référence est trop petite,
		// renvoie un message d'erreur pendant l'exécution de la fonction
	}
	for ($i = 0; $i < $length; ++$i) { // boucle de sélection aléatoire de caractère dans $keyspace
		try {
			$str .= $keyspace[ random_int( 0, $max ) ];
		} catch ( Exception $e ) {
			print "Erreur ! :" . $e->getMessage() . "<br>";
			die();
		}
	}
	return $str;
}

$mdp = passwordGenerator();
var_dump($mdp);