<?php
	$HOSTNAME = 'localhost';
	$USENAME = 'root';
	$PASSWORD = '';
	$DB = 'ums';
	$DBC = mysqli_connect($HOSTNAME,$USENAME,$PASSWORD,$DB);
	if(!$DBC){
		echo "DB Connection Failed!";
	} 
	//for bangla
	$DBC->set_charset("utf8");

