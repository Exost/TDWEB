<?php
$action = $_GET['action'];// recupère l'action passée dans l'URL
require_once ("{$ROOT}{$DS}model{$DS}ModelUtilisateur.php"); // chargement du modèle


switch ($action) {
    case "readAll":
        $pagetitle = "Liste des utilisateurs";
        $view = "all";
        $controller = "utilisateur";
        $tab_u = ModelUtilisateur::getAll();//appel au modèle pour gerer la BD
        require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
        break;
    case "read":	
		if(!isset($_GET['id'])){
			echo 'Identifiant incorrect'; 
		}else{
			$id = $_GET['id'];
			$u = ModelUtilisateur::select($id);
			if($u!=null){
				$pagetitle = "Details de l'utilisateur";
				$view = "";
				$controller = "utilisateur";
				require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
			}else{ 
				echo 'Identifiant non reconnu dans la base de donnee'; 
			}
		}
		break;
	case "delete":
		$id = $_GET['id'];
		$del = ModelUtilisateur::select($id);
		$del->delete();
	    header('Location: index.php?controller=utilisateur&action=readAll');
	    break;
	case "create":
		$pagetitle = "Enregistrer un utilisateur";
		$view = "create";
		$controller = "utilisateur";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
	case "created":
		$id = $_POST["id"];
		$n = $_POST["n"];
		$p = $_POST["p"];
		$s = $_POST["s"];
		$pass = $_POST["pass"];
		$tab = array(
			"identifiant" => $id,
			"motdepasse" => $pass,
			"nom" => $n,
			"prenom" => $p,
			"sexe" => $s);
		$u = new ModelUtilisateur($id, $pass, $n, $p, $s);
		$u->insert($tab);
		
		$pagetitle = "Utilisateur Enregistré";
		$view = "created";
		$controller = "utilisateur";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
	case "update":
		$id = $_GET['id'];
		$up = ModelUtilisateur::select($id);
		$pagetitle = "Modifier l'utilisateur'";
		$view = "update";
		$controller = "utilisateur";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
	case "updated":
		$oldid = $_GET['id'];
		$tab = array(
   			 "identifiant" => $_POST["id"],
   			 "motdepasse" =>  $_POST["pass"],
   			 "nom" => $_POST["n"],
   			 "prenom" => $_POST["p"],
   			 "sexe" => $_POST["s"]
		);
		$o = ModelUtilisateur::select($oldid);
		$u = $o->update($tab, $oldid);

		
		$pagetitle = "Utilisateur modifié";
		$view = "updated";
		$controller = "utilisateur";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
}

?>
