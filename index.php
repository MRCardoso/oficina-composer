<?php 

	require_once("./vendor/autoload.php");
	
	ini_set("display_errors", true);
	error_reporting(E_ALL);

	use Slug\Slugifier;
	use BrazilianHelper\StateHelper as Test;

	$slugifier = new Slugifier();
	$slugifier->setTransliterate(true);
	
	$string = "Marlon Ribeiro Cardoso";
	$slug = $slugifier->slugify($string);
	
	echo "Normal: {$string} <br><hr>";
	echo "Slug: {$slug} <br>";
	
	echo "brasilian helpers<br>";
	
	$states = Test::getStates();
	echo "<pre>";
	Var_dump($states);
	echo "</pre>";
	
	echo "States dropdown<br>";
	echo "<select>". Teste::getHtmlForSelectElement()."</select>";
