<?php
/**
 * @author Alejandro Moraga <moraga86@gmail.com>
 */
function pluraltosingular($str) {
	if (substr($str, -1) != 's')
		return $str;
	// albuns batons marrons
	if (substr($str, -2, 1) == 'n')
		return substr($str, 0, -2) . 'm';
	// flores gizes vezes tenis
	else if (strpos('aeou', substr($str, 0, 1)) === false && substr($str, -2, 1) == 'e' && strpos('nrsz', substr($str, -3, 1)) !== false)
		return substr($str, 0, -2);
	// aneis anzois jornais
	else if (substr($str, -2) == 'is' && strpos('aeiou', substr($str, -3, 1)) !== false)
		return substr($str, 0, -2) . 'l';
	// frances portugues
	else if (substr($str, -2) == 'es' && strpos('clu', substr($str, -3, 1)) !== false)
		return $str;
	// caes paes
	else if (substr($str, -3) == 'aes')
		return substr($str, 0, -2) . 'o';
	// leoes
	else if (substr($str, -3) == 'oes')
		return substr($str, 0, -3) . 'ao';
	// exceto onibus lapis tenis arvores
	else if (strpos('ius', substr($str, -2, 1)) === false && substr($str, -3, 1) != 'n')
		return substr($str, 0, -1);
	return $str;
}

?>