<?php

session_start();
	require 'conf.php';
if (!empty($_POST["nom"]) && !empty($_POST["poste"])&&!empty($_POST["adress"]) && !empty($_POST["numcni"])) {
$id=$_POST["id"];
$nom =$_POST["nom"];
$poste =$_POST["poste"];
$adress =$_POST["adress"];
$numcni =$_POST["numcni"];
$sql="update personnels set nom=?,poste=?,adress=?,numcni=? where id=?";
$req=$db->prepare($sql);
$req->execute(array($nom,$poste,$adress ,$numcni,$id));
	$_SESSION['error']=array(
		'type'=>'success',
		'message'=>'personel modifier avec success');
	header('Location:../personel_liste.php');
}else{

header("location:../personnel.php");
}