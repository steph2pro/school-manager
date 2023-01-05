<?php

session_start();
	require 'conf.php';
if (!empty($_POST["nom"]) && !empty($_POST["login"])&&!empty($_POST["pass"])&&!empty($_POST["address"]) && !empty($_POST["statut"])) {

$nom =$_POST["nom"];
$login =$_POST["login"];
$pass =$_POST["pass"];
$statut =$_POST["statut"];
$address =$_POST["address"];

$sql="insert into utilisateurs set nom=?,login=?,password=?,statut=?,adress=?";
$req=$db->prepare($sql);
$req->execute(array($nom,$login ,$pass,$statut,$address));
	$_SESSION['error']=array(
		'type'=>'success',
		'message'=>'utilisateur enregistrer avec success');
	header('Location:../utilisateur_liste.php');
}else{

header("location:../utilisateur.php");
}