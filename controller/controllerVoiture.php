<?php
$action = $_GET['action'];// recupère l'action passée dans l'URL
require_once ("{$ROOT}{$DS}model{$DS}ModelVoiture.php"); // chargement du modèle


switch ($action) {
    case "readAll":
        $pagetitle = "Liste des voitures";
        $view = "All";
        $controller = "voiture";
        $tab_v = ModelVoiture::getAll();
        require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
        break;
	case "read":
		
		if(!isset($_GET['immat'])){
				$pagetitle = "Voiture inconnue";
				$view = "error";
				$controller = "voiture";
				require ("{$ROOT}{$DS}view{$DS}view.php");
		}else{
			$immat = $_GET['immat'];
			$v = ModelVoiture::select($immat);
			if($v!=null){
				$pagetitle = "Details de la voiture";
				$view = "";
				$controller = "voiture";
				require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
			}else{
				$pagetitle = "Voiture inconnue";
				$view = "error";
				$controller = "voiture";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}
		}
		break;
	case "create":
		$pagetitle = "Enregistrer une voiture";
		$view = "create";
		$controller = "voiture";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
	case "created":
		$marque = $_POST["marque"];
		$couleur = $_POST["couleur"];
		$immatriculation = $_POST["immatriculation"];
		$options = $_POST["options"];
		$tab = array(
			"immatriculation" => $immatriculation,
			"marque" => $marque,
			"couleur" => $couleur);
		$v = new ModelVoiture($marque, $couleur, $immatriculation);
		$v->ajouterOption($options);
		$v->insert($tab);
		$pagetitle = "Voiture Enregistré";
		$view = "created";
		$controller = "voiture";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
	case "delete":
		$immat = $_GET['immat'];
		$del = ModelVoiture::select($immat);
		$del->delete();
	    header('Location: index.php?controller=voiture&action=readAll');
	    break;
	case "update":
		$immat = $_GET['immat'];
		$up = ModelVoiture::select($immat);
		$pagetitle = "Modifier la voiture";
		$view = "update";
		$controller = "voiture";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
	case "updated":
		$oldimmat = $_GET['immat'];
		$options = $_POST["options"];
		$tab = array(
   			 "immatriculation" => $_POST["immatriculation"],
   			 "marque" =>  $_POST["marque"],
   			 "couleur" => $_POST["couleur"],
		);
		$o = ModelVoiture::select($oldimmat);
		$v = $o->update($tab, $oldimmat);

		
		$pagetitle = "Voiture modifié";
		$view = "updated";
		$controller = "voiture";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;

}
?>
