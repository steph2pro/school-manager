<?php

session_start();
	require 'conf.php';
if (!empty($_POST["nom"]) && !empty($_POST["date"])&&!empty($_POST["lieu"]) && !empty($_POST["etab"])&&!empty($_POST["address"]) && !empty($_POST["filiere"])) {

$nom =$_POST["nom"];
$date =$_POST["date"];
$lieu =$_POST["lieu"];
$etab =$_POST["etab"];
$address =$_POST["address"];
$filiere =$_POST["filiere"];

$sql="insert into stagaires set nom=?,date_naiss=?,lieu_naiss=?,etablissement=?,adress=?,filiere=?";
$req=$db->prepare($sql);
$req->execute(array($nom,$date,$lieu,$etab,$address,$filiere));
	$_SESSION['error']=array(
		'type'=>'success',
		'message'=>'stagaire enregistrer avec success');
	header('Location:../stagaire_liste.php');
}else{

header("location:../stagaire.php");
}