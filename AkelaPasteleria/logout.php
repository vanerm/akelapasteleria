<?php
/**
 * Created by PhpStorm.
 * User: vanes
 * Date: 29/10/2017
 * Time: 8:13 PM
 */

include_once("soporte.php");
$auth->logout();
header("Location:index.php");exit;