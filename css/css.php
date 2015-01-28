<?php
	header( "Content-type: text/css" );
	try {
		$db = new mysqli( 'localhost', 'root', 'root', 'CMS' );
	} catch (mysqli_sql_exception $e) {
		die('Probleme de connexion');
	}
	$sql = "SELECT
				`css`
			FROM
				`page`
			WHERE
				`page` = '". $_GET['page'] ."'
			";
	if(!($result = $db->query($sql))){
		die('/*erreur SQL*/');
	}
	$row = $result->fetch_assoc();
	echo $row['css'];