<?php

/**
 * Configuration
 *
 * For more info about constants please @see http://php.net/manual/en/function.define.php
 * If you want to know why we use "define" instead of "const" @see http://stackoverflow.com/q/2447791/1114320
 */

/**
 * Configuration for: Error reporting
 * Useful to show every little problem during development, but only show hard errors in production
 */
error_reporting(E_ALL);
ini_set("display_errors", 1);


/**
 * Configuration for: Database
 * This is the place where you define your database credentials, database type etc.
 */
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'voyagur');
define('DB_USER', 'code_db_user');
define('DB_PASS', 'I3xI7PGo*Z');

//This will include your local settings file to tell if local or anything else 
if ( file_exists( dirname(__FILE__) . '/local.config.php')) {
  include  dirname(__FILE__) .'/local.config.php';
} else {
	/**
	 * Configuration for: Project URL
	 * Put your URL here, for local development "127.0.0.1" or "localhost" (plus sub-folder) is fine
	 */
	//define('URL', 'http://localhost:8888/');
	define('URL', 'http://54.187.193.163/');
	define('IS_LOCAL', false);
}

