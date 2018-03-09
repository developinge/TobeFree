<?php
/* Smarty version 3.1.30, created on 2018-03-09 16:26:12
  from "/var/www/html/projet/sources/accueil/page_accueil.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa2a794d73715_76176597',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3276841e428dcdc660deb078692e99883863fc0' => 
    array (
      0 => '/var/www/html/projet/sources/accueil/page_accueil.html',
      1 => 1520609160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa2a794d73715_76176597 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="2beefree" />
		<title>Page Accueil</title>
		<link href="sources/styleMain.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<div>
			<a href="./accueil">
				<img src="sources/images/logo.jpg"><h1>Nom site</h1>
			</a>
		</div>
		<div class="menu">
			<nav>
				<ul>
					<li><a href="./inscription">inscription</a></li>
					<li><a href="./critere">Recherche de pathologie par critère</a></li>
					<li><a href="./symptome">Recherche de pathologie par symptome</a></li>
					<li><a href="./information">Informations</a></li>
					<li><a href="./connexion">Connexion</a></li>
				</ul>
			</nav>
		</div>
		<div class="corps">
			<h2>Bienvenue sur notre site</h2>
			<p>Site de l'association des acupuncteurs pour rechercher vos maladies.</p>
			<a href="./pathologie">Pathologie</a>
		</div>
	</body>
	<?php echo '<?php 
	';?>if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
	{
		echo 'Bonjour ' . $_SESSION['pseudo'];
	}
	<?php echo '?>';?>
</html><?php }
}
