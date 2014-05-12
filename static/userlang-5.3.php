<?php
/*
  returns user language
 */
$userLang = split(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
$userLang = strtolower($userLang[0]);
$defaultLang = 'pt-br';

$acceptedLangs = array('pt_br', 'es', 'fr', 'en');

if (!in_array($userLang, $acceptedLangs)) {
  $userLang = $defaultLang;
}

$vars = array('userLang' => $userLang,
  	        'defaultLang' => $defaultLang,
        	'acceptedLangs' => $acceptedLangs);

print json_encode($vars,  JSON_FORCE_OBJECT);
?>
