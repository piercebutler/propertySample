<?php

/*
 * This constant is declared in index.php
* It prevents this file being called directly
*/
defined('MY_APP') or die('Restricted access');

/*
 * Declare a number of constants that you can change depending on your application
 */
define("DB_HOST","localhost");
define("DB_USER","redfinc1_pierce");
define("DB_PASSWORD","4124113");
define("DB_DATABASE","redfinc1_property");

/*
 * Declare a number of constants that you can change depending on your application
*/

define("VERSION_NUMBER","1.0");

define("COMPANY_NAME","Digital Hub");

define("APPLICATION_NAME","WebElevate Property Cloud");

define("UPLOAD_PATH",  realpath(dirname(__FILE__)) . "\\..\\uploads\\");