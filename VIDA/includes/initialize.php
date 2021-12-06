<?php
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
defined('SITE_ROOT') ? null : define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].DS.'VIDA');
defined('LIB_PATH') ? null : define ('LIB_PATH','/app/includes');

// load config file first 
require_once("/app/includes/config.php");
//load basic functions next so that everything after can use them
require_once("/app/includes/functions.php");
//later here where we are going to put our class session
require_once("/app/includes/session.php");
require_once("/app/includes/user.php"); 
require_once("/app/includes/accomodation.php");
require_once("/app/includes/guest.php"); 
require_once("/app/includes/reserve.php");  
//Load Core objects

require_once("/app/includes/database.php");

//load database-related classes
?>