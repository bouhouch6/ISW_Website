<?php

//require the PEAR::DB classes.

//require_once "$_SERVER[DOCUMENT_ROOT]/pear/PEAR/DB.php";

require_once 'DB.php';



$db_engine = 'mysql';
$db_user = 'bouhouch_almars';
$db_pass = 'alm35789512';
$db_host = 'localhost';
$db_name = 'bouhouch_almars';

$datasource = $db_engine.'://'.
			  $db_user.':'.
			  $db_pass.'@'.
		 	  $db_host.'/'.
	  		  $db_name;


$db_object = DB::connect($datasource, TRUE);

/* assign database object in $db_object, 

if the connection fails $db_object will contain

the error message. */

// If $db_object contains an error:

// error and exit.

if(DB::isError($db_object)) {
	die($db_object->getMessage());
}

$db_object->setFetchMode(DB_FETCHMODE_ASSOC);

// we write this later on, ignore for now.

include('check_login.php');

?>