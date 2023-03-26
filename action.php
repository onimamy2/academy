<?php
session_start();
include './config/config.php';
include './classes/utilisateur.class.php';

if(isset($_POST['btn-inscription'])){

	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$email = $_POST['email'];
	$date_naissance = $_POST['date_naissance'];
	$nom_utilisateur = $_POST['nom_utilisateur'];
	$mdp = $_POST['mdp'];

	$utilisateur = new Utilisateur($nom, $prenom, $email, $date_naissance, $nom_utilisateur, $mdp);
	$id_utilisateur = $utilisateur->creerUtilisateur($cnx);

	if((int)$id_utilisateur > 0){
		$_SESSION['id_utilisateur'] = (int)$id_utilisateur;
		$_SESSION['nom'] = $nom;

		header('location:moncompte.php');
	}

}


?>