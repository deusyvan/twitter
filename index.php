<?php 
use Core\Core;

session_start();
require 'config.php';
require 'vendor/autoload.php';
require 'routers.php';

$core = new Core();
$core->run();