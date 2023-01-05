<?php
try
	{
		$db= new PDO('mysql: host= localhost; dbname=ges_stagaire; charset=utf8', 'root', '');
			
		
		}
	catch(PDOException $e)
	{
		die('erreur :'. $e->getMessage());
	}