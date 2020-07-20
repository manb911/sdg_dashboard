<?php

$host = "localhost";
$user = "seendigi_user";
$password = "X;kquKc7.C+Z";
$con = mysql_connect($host, $user, $password);
$db = "seendigi_db";
mysql_select_db($db, $con);
mysql_query("SET NAMES utf8", $con);

