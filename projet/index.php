<?php

//mon index.php se trouve dans projet
require("lib/smarty/Smarty.class.php"); // On inclut la classe Smarty
$smarty = new Smarty();
// var_dump($_GET);   //DEBUG

$url = '';
if(isset($_GET['url'])) {
    $url = explode('/',$_GET['url']);
}
// var_dump($url);   //DEBUG

if($url == '') {
	require 'sources/accueil/page_accueil.html';	
} elseif($url[0]=='accueil') {
		$smarty->display("sources/accueil/page_accueil.html");	
} elseif($url[0]=='critere') {
		require "sources/critere/requete_symptome.php";	
} elseif($url[0]=='inscription') {
		require 'sources/inscription/inscription.php';  //url=localhost/projet/inscription	
} elseif($url[0]=='symptome') {
		$smarty->display("sources/symptome/symptome.html");
} elseif($url[0]=='pathologie') {
		$smarty->display("sources/pathologie/pathologie.html");	
} elseif($url[0]=='information') {
		$smarty->display("sources/info/information.html");
} elseif($url[0]=='connexion') {
		require 'sources/login/connexion.php';  //url=localhost/projet/connexion	
}

?>