<?php
// __DIR__ est une constante "magique" de PHP qui contient le chemin du dossier courant
$ROOT = __DIR__;
$DS = DIRECTORY_SEPARATOR;
$controller;

$controleur_default = "voiture" ;



if(isset($_COOKIE["TestCookie"])){
    $pref = $_COOKIE["TestCookie"];
    $controller_default = $pref;
}
//////////////////////



if(!isset($_GET['controller'])){
			$controller= $controller_default;
		}else{$controller = $_GET['controller'];}// recupère l'action passée dans l'URL
	
		switch ($controller) {
			case "voiture" :
				if(!isset($_GET['action'])){
				$_GET['action'] = "readAll";
				}
				require ("{$ROOT}{$DS}controller{$DS}controllerVoiture.php");
				break;
			case "utilisateur" :
				if(!isset($_GET['action'])){
				$_GET['action'] = "readAll";
				}
				require ("{$ROOT}{$DS}controller{$DS}controllerUtilisateur.php");
				break;	
			case "default" :
				if(!isset($_GET['action'])){
				$_GET['action'] = "readAll";
				}
				require ("{$ROOT}{$DS}controller{$DS}controllerVoiture.php");
				break;
		}	
?>


