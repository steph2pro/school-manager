<?php

session_start();
	require 'conf.php';
if (!empty($_POST["nom"]) && !empty($_POST["code"])&&!empty($_POST["adress"]) && !empty($_POST["tel"])) {

$nom =$_POST["nom"];
$code =$_POST["code"];
$tel =$_POST["tel"];
$adress =$_POST["adress"];

$sql="insert into entreprises set nom=?,code=?,adress=?,tel=?";
$req=$db->prepare($sql);
$req->execute(array($nom,$code,$adress,$tel));
	$_SESSION['error']=array(
		'type'=>'success',
		'message'=>'entreprise enregistrer avec success');
	header('Location:../entreprise_liste.php');
}else{

header("location:../entreprise.php");
}