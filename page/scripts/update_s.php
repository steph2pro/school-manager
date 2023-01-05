<?php

session_start();
	require 'conf.php';
if (!empty($_POST["nom"]) && !empty($_POST["date"])&&!empty($_POST["lieu"]) && !empty($_POST["etab"])&&!empty($_POST["address"]) && !empty($_POST["filiere"])) {
$id=$_POST["id"];
$nom =$_POST["nom"];
$date =$_POST["date"];
$lieu =$_POST["lieu"];
$etab =$_POST["etab"];
$address =$_POST["address"];
$filiere =$_POST["filiere"];

$sql="update stagaires set nom=?,date_naiss=?,lieu_naiss=?,etablissement=?,adress=?,filiere=? where id=?";
$req=$db->prepare($sql);
$req->execute(array($nom,$date,$lieu,$etab,$address,$filiere,$id));
	$_SESSION['error']=array(
		'type'=>'success',
		'message'=>'stagaire modifier avec success');
	header('Location:../stagaire_liste.php');
}else{

header("location:../stagaire.php");
}