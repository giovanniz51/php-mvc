<?php
/**
 * Start session if not already started
 */
if(!isset($_SESSION)) session_start();

//load environment variable
require_once __DIR__ . '/../app/config/_env.php';

//init database class
new \App\Classes\Database();

require_once __DIR__ . "/../app/routing/routes.php";

new \App\RouteDispatcher($router);