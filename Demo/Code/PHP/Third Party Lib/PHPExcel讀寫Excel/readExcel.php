<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

date_default_timezone_set('Asia/Taipei');

/** Include PHPExcel_IOFactory */
require_once dirname(__FILE__) . '/../PHPExcel-1.8/Classes/PHPExcel/IOFactory.php';

?>