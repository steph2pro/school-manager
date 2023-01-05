<?php

session_start();
	require 'conf.php';
if (!empty($_POST["nom"]) && !empty($_POST["code"])&&!empty($_POST["adress"]) && !empty($_POST["tel"])) {

$id=$_POST["id"];
$nom =$_POST["nom"];
$code =$_POST["code"];
$tel =$_POST["tel"];
$adress =$_POST["adress"];

$sql="update entreprises set nom=?,code=?,adress=?,tel=? where id=?";
$req=$db->prepare($sql);
$req->execute(array($nom,$code,$adress,$tel,$id));
	$_SESSION['error']=array(
		'type'=>'success',
		'message'=>'entreprise modifier avec success');
	header('Location:../entreprise_liste.php');
}else{

header("location:../entreprise.php");
}