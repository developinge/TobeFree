<?php 


//On r�cup�re le mail et de mot de passe du formulaire
$adresse_mail = $_POST['email_addr'];
$mot_de_passe = $_POST['mdp'];




$resultat[0] = 'motdepasse'; // Il faudrait r�cup�rer le mot de passe dans la base de donn�e avec peut �tre un query mais la je s�che ^^ 
// Protection des mots de passe avec md5 (hachage)
$mot_de_passe_hache = md5($mot_de_passe);


//On v�rifie si les mot de passe sont bien les m�mes
if($mot_de_passe_hache == $resultat[0]){
	
	$_SESSION['etat_connexion'] = true;
	echo "La Connexion est  "; // normalement true
	echo $_SESSION['etat_connexion'];

}
else{
	
	$_SESSION['etat_connexion'] = false;
	
}

//Peut �tre mettre un message si c'est bon ou pas 
?>
