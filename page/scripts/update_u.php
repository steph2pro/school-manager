<?php

session_start();
	require 'conf.php';
if (!empty($_POST["nom"]) && !empty($_POST["login"])&&!empty($_POST["pass"])&&!empty($_POST["address"]) && !empty($_POST["statut"])) {
$id=$_POST["id"];
$nom =$_POST["nom"];
$login =$_POST["login"];
$pass =$_POST["pass"];
$statut =$_POST["statut"];
$address =$_POST["address"];


$sql="update utilisateurs set nom=?,login=?,password=?,statut=?,adress=? where id=?";
$req=$db->prepare($sql);
$req->execute(array($nom,$login ,$pass,$statut,$address,$id));
	$_SESSION['error']=array(
		'type'=>'success',
		'message'=>'utilisateur modifier avec success');
	header('Location:../utilisateur_liste.php');
}else{

header("location:../utilisateur.php");
}