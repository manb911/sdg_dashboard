<?php

	header('Content-Type: application/json');
        include 'connect_cloudsql.php';
	
	$strSQL = "SELECT * FROM inv_site  ";

	$objQuery = mysql_query($strSQL);
	$resultArray = array();
	while($obResult = mysql_fetch_array($objQuery))
	{
		array_push($resultArray,$obResult);
	}
	
	mysql_close($objConnect);
	
	echo json_encode($resultArray);

