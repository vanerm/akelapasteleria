<?php
/**
 * Created by PhpStorm.
 * User: vanes
 * Date: 29/10/2017
 * Time: 1:48 AM
 */

require_once ("clases/Auth.php");
require_once ("clases/Validator.php");
require_once ("clases/DBJson.php");
require_once ("clases/DBMySql.php");

$auth = new Auth();
$validator = new Validator();
$db = new DBMySql();