<?php

session_start();
	require 'conf.php';
if (!empty($_POST["nom"]) && !empty($_POST["poste"])&&!empty($_POST["adress"]) && !empty($_POST["numcni"])) {

$nom =$_POST["nom"];
$poste =$_POST["poste"];
$adress =$_POST["adress"];
$numcni =$_POST["numcni"];
$sql="insert into personnels set nom=?,poste=?,adress=?,numcni=?";
$req=$db->prepare($sql);
$req->execute(array($nom,$poste,$adress ,$numcni));
	$_SESSION['error']=array(
		'type'=>'success',
		'message'=>'personel enregistrer avec success');
	header('Location:../personel_liste.php');
}else{

header("location:../personnel.php");
}