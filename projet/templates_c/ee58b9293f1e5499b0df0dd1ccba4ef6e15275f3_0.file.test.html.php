<?php
/* Smarty version 3.1.30, created on 2018-02-21 16:24:29
  from "/var/www/html/projet/test.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a8d8f2dcb66d9_98008528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee58b9293f1e5499b0df0dd1ccba4ef6e15275f3' => 
    array (
      0 => '/var/www/html/projet/test.html',
      1 => 1518798212,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8d8f2dcb66d9_98008528 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<meta name="keywords" content="page d'information, ressource, auteur, source" />
	<meta name="author" content="2beefree" />
	<title>Page d'information</title>
    <link rel="stylesheet" type="text/css" href="ecran.css" media="screen">
    <link rel="stylesheet" type="text/css" href="impression.css" media="print">
    <!--
A VOIR POUR LICENCE
 * Licence creative commons By
 * http://creativecommons.org/licenses/by/3.0/deed.fr
	-->
	
</head>

<body>
	<h1>Page d'information</h1>
	<h2>Notes de développement</h2>
    <ul>
        <li>Création page d'information</li>
    </ul>
    
    <h2>Sources</h2>
    <ul>
        <li>source 1</li>
        <br/><?php echo $_smarty_tpl->tpl_vars['nom']->value;?>

    </ul>
    <h2>Auteurs</h2>
    <ul>
        <li>BOURGOGNE</li>
        <li>CAUSSANEL</li>
        <li>CURE</li>
        <li>GUILLEMAUT</li>
        <li>KERLOCH</li>
        <li>PHENG</li>
    </ul>
    <h2>Ressources bibliographiques</h2>
    <ul>
        <li> ressource b 1</li>
    </ul>
    
    <h2>Webographie</h2>
    <ul>
        <li> webograhie 1</li>
    </ul>
    
	<footer>
		<p>Bas de page</p>
		
		
		Licence creative commons By <a href="http://creativecommons.org/licenses/by/3.0/deed.fr">http://creativecommons.org/licenses/by/3.0/deed.fr</a>
	</footer>
	
</body>
</html><?php }
}
