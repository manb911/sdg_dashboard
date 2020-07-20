<?php

$host = "35.247.143.172";
$user = "sdg_cloud_client";
$password = "Xid_5rEP_1";
$con = mysql_connect($host, $user, $password);
$db = "sdg_data_mgt";
mysql_select_db($db, $con);
mysql_query("SET NAMES utf8", $con);
?>
