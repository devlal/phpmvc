<?php

/**
 * Main Index File.
 * 
 * App is single point entry
 * 
 * Assigns constant vars
 * Loads the loader
 * 
 * @author Dave Jay <dave.jay90@gmail.com>
 * @version 1.0
 * @package Team_Archives
 * @since April 16, 2013
 * 
 */

session_start();
error_reporting(0);

# DB informaitons
define('DB_HOST', 'localhost'); 
//define('DB_PASSWORD', 'Admin1@#4');
//define('DB_UNAME', 'ocstest3_jay');
//define('DB_NAME', 'ocstest3_jay_test');

define('DB_PASSWORD', '');
define('DB_UNAME', 'root');
define('DB_NAME', 'rober_ta');

// No other urls at the moment, only home-page is opened :)


include "loader.php";

?>
