<?php
	//lorsquon creer une session elle se ferme lorsqu'on ferme le navigateur
	session_start();

	//inclusion de la page de connection
	require_once'conf.php';
	$id=$_GET['id'];
	$sql='delete from personnels where id=?';
	$req=$db->prepare($sql);
	$req->execute(array($id));
	$_SESSION['error']=array(
		'type'=>'success',
		'message'=>'personnel suprimer avec success');
	header('Location:../perso7nel_liste.php');

?>